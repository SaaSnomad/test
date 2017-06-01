function checkForm(form) { // Submit button clicked
    // Prevent Form Submitting
    // Output 
    var range_from = $('.range-from').val();
    var range_to = $('.range-to').val();

    // User Inputs 
    var user_region;          // User Region, Target market
    var user_mrr;             // User MRR, $
    var user_mrr_growth;      // User MRR Growth, %
    var user_margin;          // User Gross margin, %
    var user_burn;            // User Monthly cash burn, $



    // Internal assumptions - static
    var int_ass_arr_mult = 6.4;         // ARR market multiple. For cash positive companies only (±20% higher than average, see the source) (to be updated manually from https://www.bvp.com/strategy/cloud-computing/index)
    var int_ass_arr_growth = 0.22;      // 22% - Baseline ARR growth (to be updated manually from https://www.bvp.com/strategy/cloud-computing/index)
    var int_ass_margin = 0.69;          // 69% - Baseline gross margin (to be updated manually from https://www.bvp.com/strategy/cloud-computing/index)
    var int_ass_error = 0.1;            // 10% - Error size (our own assumption)


    // Internal variables 
    var int_var_region_coef;                // Region coefficient
    var int_var_mrr_growth_base;            // Baseline MRR growth. Not used but may need it
    var int_var_arr_running;                // Baseline MRR growth
    var int_var_arr_back;                   // ARR 12m back
    var int_var_arr_growth;                 // ARR growth
    var int_var_growth_coef;                // Growth coefficient
    var int_var_profit;                     // Gross profit
    var int_var_margin_coef;                // Margin coefficient
    var int_var_profit_mult;                // Implied gross profit multiple
    var int_var_burn_coef;                  // Burn coefficient


    // Results 
    var res_eq_val_base;             // Baseline equity value
    var res_eq_val_adj_coef;         // Valuation adjustment coeficient
    var res_eq_val;                  // Adjusted equity value
    var res_eq_val_mult;             // Implied ARR multiple
    var res_eq_val_low;              // Valuation range - low
    var res_eq_val_high;             // Valuation range - high
    var res_eq_val_mult_low;         // Implied ARR multiple - low
    var res_eq_val_mult_high;        // Implied ARR multiple - high

    // User Inputs 
    user_region = $('#calculator_region').find('option:selected').attr('value');
    user_mrr = parseInt($('#calculator_mrr').val());
    user_mrr_growth = (parseInt($('#calculator_mrr_growth').val()))*0.01;
    user_margin = (parseInt($('#calculator_margin').val()))*0.01;
    user_burn = parseInt($('#calculator_burn').val());


    // Region coef
    switch(user_region) {
        case 'North America':
            int_var_region_coef = 1;
            break;
        case 'Europe':
            int_var_region_coef = 0.9;
            break;
        case 'Asia':
            int_var_region_coef = 0.85;
            break;
        default:
            int_var_region_coef = 0.8 
    }

    // Burn coef
    if (user_burn = 0) {
        int_var_burn_coef = 1;
    }
    else {
        int_var_burn_coef = 0.8;
    } 

    // Internal variables 
    int_var_mrr_growth_base = (Math.pow((1 + int_ass_arr_growth),1/12)) - 1;      //not used but may need it
    int_var_arr_running = user_mrr * 12;
    int_var_arr_back = Math.pow(user_mrr, 1/12) *12;
    int_var_arr_growth = int_var_arr_running / int_var_arr_back - 1;
    int_var_growth_coef = user_mrr_growth / int_var_mrr_growth_base;
    int_var_profit = int_var_arr_running * user_margin;
    int_var_margin_coef = user_margin / int_ass_margin;
    int_var_profit_mult = int_ass_arr_mult / int_ass_margin;

    // Results 
    res_eq_val_base = int_var_arr_running * int_ass_arr_mult;                     //Baseline equity value
    // var valuation_base_check = profit * profit_mult / margin_coef;             //Baseline equity value (check)
    res_eq_val_adj_coef = int_var_region_coef * int_var_growth_coef * int_var_margin_coef * int_var_burn_coef;     //Valuation adjustment coeficient
    res_eq_val = res_eq_val_base * res_eq_val_adj_coef;                           //Adjusted equity value
    res_eq_val_mult = res_eq_val / int_var_arr_running;                           //Implied ARR multiple
    res_eq_val_low = res_eq_val * (1 - int_ass_error);                            //Valuation range - low
    res_eq_val_high = res_eq_val * (1 + int_ass_error);                           //Valuation range - high
    res_eq_val_mult_low = res_eq_val_low / int_var_arr_running;                   //Implied ARR multiple - low
    res_eq_val_mult_high = res_eq_val_high / int_var_arr_running;                 //Implied ARR multiple - high
    
    if (res_eq_val_high > 1000000000) {
        $("#valuation-range").hide();
        $("#preloader-calculator").css('display','block');

        setTimeout(function () {
            $("#preloader-calculator").css('display','none');
            $("#valuation-range").fadeIn();
            $("#valuation-range").html("<img id='unicorn' src='img/unicorn.png'><h3><b>Congrats, you crazy Unicorn!</b></h3><h4>The valuation of your SaaS is +&#36;1B</h4>");
            $("#valuation-range").addClass("text-center");
            $("#calculate-btn").addClass("disabled btn");
        }, 2000); 
        
    }else {
        $(".range-from").val(Math.round(res_eq_val_low));
        $(".range-to").val(Math.round(res_eq_val_high));
    }

    

    return
    
} 
