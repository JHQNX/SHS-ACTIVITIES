<?php
    ini_set("display_errors", 1);
    $results = [];

    if(isset($_POST['loan_amount']) && isset($_POST['interest_rate']) && isset($_POST['number_of_payments'])) {
        $loan_amount = $_POST['loan_amount'];
        $interest_rate = $_POST['interest_rate'];
        $number_of_payments = $_POST['number_of_payments'];

        $rate = ($interest_rate / 100) / 12;
        $interest = $rate * $loan_amount; 

        $montly_payment = $interest / (1 - pow ( (1 + $rate), - $number_of_payments) ); //
        $principal = $montly_payment - $interest;
        $balance = $loan_amount - $principal;

        $results[] = [
            'period' => 1,
            'principal' => $principal,
            'interest' => $interest,
            'payment' => $montly_payment,
            'balance' => $balance
         ];
                
            for( $i = 1; $i < $number_of_payments; $i++){

                $cal_interest = $results[count($results)-1]['balance'] * $rate;
                $cal_principal = $montly_payment - $cal_interest;
                $cal_balance = $results[count($results)-1]['balance'] - $cal_principal;

                $results[] = [
                    'period' => $i+1,
                    'principal' => $cal_principal,
                    'interest' => $cal_interest,
                    'payment' => $montly_payment,
                    'balance' => $cal_balance
                ];
            }
        }
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Amortization Calculator </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        body {
            font-family: Roboto, sans-serif;
        }
        form {
            padding: 16px;
            background-color: #E5E4E2;
        }
        h2 {
            background-color: #E5E4E2;
        } 
        table {
            background-color: #E5E4E2;
            text-align: center;
        }
        button {
            background-color: #555;
            padding: 6px;
            color: #FFF;
        }
        .sz {
            width: 50%;
            margin: 40px;
        }
        </style>
    </head>
    <body>
    <center>
        <div class="sz">
        <form action="" method="POST">
        <h2> Amortization Calculator </h2>
            <hr>
            <input type="text" name="loan_amount" id="loan_amount" placeholder="Principal Loan Amount">
            <input type="text" name="interest_rate" id="interest_rate" placeholder="Annual Interest Rate %">
            <input type="text" name="number_of_payments" id="number_of_payments" placeholder="Period In Months">
            <button type="submit" name="calculate"> Calculate </button>
            <hr>
        </form>
        <table width="100%" cellpadding="5px">
            <thead>
                <tr>
                    <th> Payment No. </th>
                    <th> Principal </th>
                    <th> Interest </th>
                    <th> Amount </th>
                    <th> Balance </th>
                </tr>
            </thead>
            <?php if( isset($_POST['loan_amount']) ){ ?>   
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><?php echo $_POST['loan_amount']; ?></td>
                </tr>
            <?php } ?>
			<tbody> 
				<?php foreach( $results as $result ){ ?>
				<tr>
					<td>
						<?php echo $result['period']; ?>
					</td>
					<td>
						<?php echo number_format($result['principal'],2); ?>
					</td>
					<td>
						<?php echo number_format($result['interest'],2); ?>
					</td>
					<td>
						<?php echo number_format($result['payment'],2); ?>
					</td>
					<td>
						<?php echo number_format($result['balance'],2); ?>
					</td>
				</tr>
                <tr>
                    <td colspan="5"><hr></td>
				<?php } ?>
			</tbody>
        </table>
        </div>
    </center>
    </body>
</html>