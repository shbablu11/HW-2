

<?php

//check big number of 4

/**
function biggestnum ($num1,$num2,$num3,$num4){


if ($num1 > $num2 && $num1 > $num3 && $num1 > $num4) {
  echo "num1 biggest";
}

elseif ($num2 > $num1 && $num2 > $num3 && $num2 > $num4) {
  echo "num2 biggest";
} 

elseif ($num3 > $num1 && $num3 > $num2 && $num3 > $num4) {
  echo "num3 biggest";
}

  else {
  echo "num4 biggest";
  }

 }
 
 biggestnum(55,30,20,70);
*/




//loan checker


/**
function calLoan($loan, $duration, $interest)
{
  $base_amount = $loan / $duration;
  $per_month_interest_fee = $base_amount * ($interest/$duration);
  $total_per_month_pay = $base_amount + $per_month_interest_fee;

  return ceil($total_per_month_pay);
}

// calLoan(25000, 12, 0.1);

function isAbleToGetLoan ($income, $expenses, $calLoan)

{
  $saving = $income - $expenses;
  if ($saving > $calLoan)
  {
    echo "Ha, apni parben. $calLoan";
  }
  else
  {
    echo "Na, apni parben Na. $calLoan";
  }
}

isAbleToGetLoan(2000, 1500, calLoan(25000, 12, 0.1));
*/



//mail checking for login

 /**
function authLOgin($email, $passw)
{

//perameter ar variable same rakai better
  // $email = 'admin@gmail.com';
  // $passw = 'pass1234';
  
  //checking email
  
  if($email == 'admin@gmail.com')
  {
    //checking passw
    if($passw == 'pass12345')
     {
       echo "You are logged in";
     } else 
     {
      echo "wrong password";
     }
  }
  //different
  else
  {
    echo "No email account found";
  }
}

authLogin('admin@gmail.com','pass12345');

*/



?>
