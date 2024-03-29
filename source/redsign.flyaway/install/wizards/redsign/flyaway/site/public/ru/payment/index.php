<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Способы оплаты");
?>

<div class="p-payment">
    <div class="p-payment__warning">
        <div class="p-payment__warning-icon">
            <img src="warning.png" alt="Это важно" alt="Это важно">
        </div>
        <div class="p-payment__warning-text"><i>Способ оплаты любого заказа Вы выбираете при его оформлении.<br>Оплата в Интернет-магазине производится только в рублях. <br>После подтверждения заказа оператором Интернет-магазина способ оплаты изменен быть не может.</i></div>
    </div>

    <div class="p-payment__block">
        <h2>Наличный расчет</h2>
        <p>Самый распространенный и удобный способ оплаты покупок. Вы отдаете сотруднику Службы доставки деньги при получении заказа. Обращаем ваше внимание, что подарочные карты ЭЛЬДОРАДО к оплате не принимаются.</p>

        <h2>Онлайн оплата банковской картой</h2>
        <p>Мы принимаем онлайн-платежи по cледующим платежным системам:<br>Visa, MasterCard, JCB, DCL</p>
        <figure class="p-payment__logos">
            <img src="visa_logo.png" alt="visa">
            <img src="mastercard_logo.png" alt="mastercard">
            <img src="jcb_logo.png" alt="jcb">
            <img src="dcl_logo.png" alt="dcl">
        </figure>

        <p>К оплате не принимаются банковские карты Visa и MasterCard без кода CVV2 / CVC2.</p>

        <p>Оплата заказа производится через интернет непосредственно после его оформления.</p>
        <p>Минимальная сумма платежа составляет 500 рублей.</p>
        <p>В случае, если Вы оплатили заказ банковской карточкой и затем отказались от него, возврат переведенных средств производится на Ваш банковский (карточный) счет.</p>

        <h2>Безналичный расчет</h2>
        <p>Это единственный способ оплаты в случае, если заказ оформляется на юридическое лицо. Минимальная сумма заказа для выставления счёта составляет 3500 рублей.</p>
        <p>При получении заказа необходимо иметь при себе доверенность от организации-заказчика и удостоверение личности. Вместе с заказом выдаются счет, счет-фактура и накладная.</p>
    </div>
</div>

<?
if( IsModuleInstalled('subscribe')) {
    ?><div class="row col col-lg-9"><?
	$APPLICATION->IncludeComponent(
		"bitrix:subscribe.form",
		"detail",
		array(
			"COMPONENT_TEMPLATE" => "detail",
			"USE_PERSONALIZATION" => "Y",
			"SHOW_HIDDEN" => "N",
			"PAGE" => '#SITE_DIR#about/press_center/subscribe/',
			"CACHE_TYPE" => 'A',
			"CACHE_TIME" => 3600,
			"RSFLYAWAY_DETAIL_SUBSCRIBE_NOTE" => 'Оставьте адрес эллектронной почты и получайте свежие новости',
		)
	);
    ?></div><?
}
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
