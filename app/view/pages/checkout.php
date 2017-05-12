<?php

echo $autoload = ROOT.DS.'vendor'.DS.'autoload.php';

require_once $autoload;


use zvook\Skrill\Models\QuickCheckout;

$quickCheckout = new QuickCheckout([
    'pay_to_email' => 'mymoneybank@mail.com',
    'amount' => 100500,
    'currency' => 'EUR'
]);

/*
You can also use setters to bind parameters to model
If you want to see all list of parameters just open QuickCheckout file
Each class attribute has description
*/
$quickCheckout->setReturnUrl('https://my-domain.com');
$quickCheckout->setReturnUrlTarget(QuickCheckout::URL_TARGET_BLANK);


use zvook\Skrill\Forms\QuickCheckoutForm;

$form = new QuickCheckoutForm($quickCheckout);

echo $form->open([
    'class' => 'skrill-form'
]);

/*
By default all fields will be rendered as hidden inputs
If you need to render some field as visible (i.e. amount of payment) you should specify it in $exclude
Excluded fields will not be rendered at all - you should render them by yourself
*/
$exclude = ['amount', 'currency', 'name'];
echo $form->renderHidden($exclude);
?>
<input type="text" name="amount"> .....
<?php
echo $form->renderSubmit('Pay', ['class' => 'btn']);
echo $form->close();



/*$request = new \Skrill\Quick\SkrillRequest();
$request->pay_to_email = 'skrill.merchant.email@gmail.com';
$request->amount = '100';
$request->currency = 'RSD';
$request->language = 'RS';
$request->prepare_only = '1';

$client = new \Skrill\Quick\SkrillClient($request);
echo $client->getRedirectUrl(); //return redirect url
echo "<br/> || <br/>";
echo $client->generateSID();*/


?>
<h1>Checkout</h1>
<div>
	<table>
		<tr><th>First Name</th><th>Last Name</th><th>Bio</th><th>Total price</th><th>Other</th></tr>
		<tr><td><?= $this->user["first_name"]?></td><td><?= $this->user["last_name"]?></td><td><?= $this->user["bio"];?></td><td><?= $this->total_price;?></td><td><?= $this->user["profession"];?></td></tr>
	</table>
	<?= $this->message?>
</div>