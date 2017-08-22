$(function(){                 
                $('#calculator_mrr').number( true );  
                $('#calculator_mrr_growth').number( true );  
                $('#calculator_margin').number( true );
                $('#calculator_burn').number( true );
                $('.range-from').number( true );  
                $('.range-to').number( true ); 
                // Seller Application  
                $('#seller_mrr').number( true );  
                $('#seller_employees').number( true );                 
            });
document.onkeydown = function (e) {
            if (e.keyCode === 109 || e.keyCode === 189) {
                var target = e.target || e.srcElement;
                e.target.value = "";
            }
        }; 
