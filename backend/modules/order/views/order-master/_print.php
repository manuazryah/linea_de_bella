<?php ?>
<div id="print">
        <style type="text/css">
                tfoot{display: table-footer-group;}
                table { page-break-inside:auto;}
                tr{ page-break-inside:avoid; page-break-after:auto; }

                @page {
                        size: A4;
                }
                @media print {
                        thead {display: table-header-group;}
                        tfoot {display: table-footer-group}
                        /*tfoot {position: absolute;bottom: 0px;}*/
                        .main-tabl{width: 100%}
                        .footer {position: fixed ; left: 0px; bottom: 0px; right: 0px; font-size:10px; }
                        .main-tabl{
                                -webkit-print-color-adjust: exact;
                                margin: auto;
                                /*tr{ page-break-inside:avoid; page-break-after:auto; }*/
                        }

                }
                @media screen{
                        .main-tabl{
                                width: 60%;
                        }
                }
                body h6,h1,h2,h3,h4,h5,p,b,tr,td,span,div{
                        color:#525252 !important;
                }
                .main-tabl{
                        margin: auto;
                }
                .main-left{
                        float: left;
                }
                .main-right{
                        float: right;

                }
                .heading{
                        width: 100%;
                        text-align: center;
                        font-weight: bold;
                        font-size: 17px;
                }
                .print{
                        margin-top: 20px;
                        margin-left: 530px;
                }
                .save{
                        margin-top: 18px;
                        margin-left: 6px !important;
                }
                .heading p{
                        font-size: 11px;
                        line-height: 5px;
                }
                .left-address p{
                        font-size: 11px;
                        line-height: 5px;
                }
                .footer {
                        width: 100%;
                        display: inline-block;
                        font-size: 15px;
                        color: #4e4e4e;
                        border-top: 1px solid #a09c9c;
                        padding: 9px 0px 3px 0px;
                }
                .footer p {
                        text-align: center;
                        font-size: 9px;
                        margin: 0px !important;
                        color: #525252 !important;
                        font-weight: 600;
                }
        </style>
        <table class="main-tabl" border="0" style="font-family: Roboto, sans-serif !important;">
                <thead>
                        <tr>
                                <th style="width:100%">
                                        <div class="header">
                                                <div class="main-left">
                                                        <img width="" height="" src="<?= Yii::$app->homeUrl ?>images/logo.png"/>
                                                </div>
                                                <div class="main-right" style="padding-top: 12px;">
                                                        <div class="heading" style="font-weight:normal">
                                                                <strong style="text-transform:uppercase;font-size:25px;">ORDER SUMMARY</strong>
                                                        </div>
                                                </div>
                                                <br/>
                                        </div>
                                </th>
                        </tr>

                </thead>
                <tbody>
                        <tr>
                                <td>
                                        <div class="close-estimate-heading-top" style="margin-bottom:30px;">
                                                <div class="main-left left-address" style="padding-top: 10px;">
                                                        <table class="tb2">
                                                                <tr>
                                                                        <td style="max-width: 405px;font-size: 11px;">
                                                                                <p><label style="font-weight:bold;text-decoration: underline">CONSIGNOR</label></p>
                                                                        </td>
                                                                </tr>
                                                                <tr>
                                                                        <td style="max-width: 405px;font-size: 11px;">
                                                                                <p style="padding-top: 15px;font-weight: 700;">CORAL PERFUMES INDUSTRY LLC</p>
                                                                                <p >P.O BOX: 186887 , Dubai, UAE</p>
                                                                                <p >Email : info@coralperfumes.com</p>
                                                                                <p >Tel : +9714-3217112, Fax : +9714-3217127</p>
                                                                        </td>
                                                                </tr>
                                                        </table>
                                                </div>
                                                <div class="main-right left-address" style="margin: 0px 16px 0px 0px;">
                                                        <table class="tb2">
                                                                <tr>
                                                                        <td style="max-width: 405px;">
                                                                                <table>
                                                                                        <tr style="font-size: 11px;">
                                                                                                <td style="max-width: 405px;font-size: 11px;">
                                                                                                        <p style="padding-top: 15px;font-weight: 700;">INV:- CRL/JAN27/0051</p>
                                                                                                        <p >Date: <?= date('d-m-Y', strtotime($order_master->order_date)) ?></p>
                                                                                                        <p >Order No: <?= $order_master->order_id ?></p>
                                                                                                        <p >TRN : 100240029700003</p>
                                                                                                </td>
                                                                                        </tr>

                                                                                </table>
                                                                        </td>
                                                                </tr>
                                                        </table>
                                                </div>
                                        </div>
                                        <br/>
                                </td>
                        </tr>


                        <tr>
                                <td>
                                        <div class="close-estimate-heading-top" style="margin-bottom:30px;">
                                                <div class="main-left left-address" style="padding-top: 10px;">
                                                        <table class="tb2">
                                                                <tr>
                                                                        <td style="max-width: 405px;font-size: 11px;">
                                                                                <p><label style="font-weight:bold;text-decoration: underline">BILLING ADDRESS</label></p>
                                                                        </td>
                                                                </tr>
                                                                <?php
                                                                $bill_address = \common\models\UserAddress::findOne($order_master->bill_address_id);
                                                                ?>
                                                                <tr>
                                                                        <td style="max-width: 405px;font-size: 11px;">
                                                                                <p style="padding-top: 15px;"><?= $bill_address->address ?></p>
                                                                                <p ><?= $bill_address->location ?></p>
                                                                                <p ><?= $bill_address->landmark ?></p>
                                                                                <p >Tel : <?= $bill_address->mobile_number ?></p>
                                                                        </td>
                                                                </tr>
                                                        </table>
                                                </div>
                                                <div class="main-right left-address" style="padding-top: 10px;margin: 0px 30px 0px 0px;">
                                                        <table class="tb2">
                                                                <tr>
                                                                        <td style="max-width: 405px;font-size: 11px;">
                                                                                <p><label style="font-weight:bold;text-decoration: underline">SHIPPING ADDRESS</label></p>
                                                                        </td>
                                                                </tr>
                                                                <?php
                                                                $ship_address = \common\models\UserAddress::findOne($order_master->ship_address_id);
                                                                ?>
                                                                <tr>
                                                                        <td style="max-width: 405px;font-size: 11px;">
                                                                                <p style="padding-top: 15px;"><?= $ship_address->address ?></p>
                                                                                <p ><?= $ship_address->location ?></p>
                                                                                <p ><?= $ship_address->landmark ?></p>
                                                                                <p >Tel : <?= $ship_address->mobile_number ?></p>
                                                                        </td>
                                                                </tr>
                                                        </table>
                                                </div>
                                        </div>
                                        <br/>
                                </td>
                        </tr>



                        <tr>
                                <td>
                                        <div class="invoice-details"style="margin-top: 10px;min-height: 375px;">
                                                <table style="width:100%;border-collapse: collapse;text-align: left;">
                                                        <tr style="background: #4e5254;color: white !important;">
                                                                <th style="width: 5%;font-size: 12px;padding: 10px 5px;">Sl No.</th>
                                                                <th style="width: 20%;font-size: 12px;padding: 10px 2px;">Product</th>
                                                                <th style="width: 5%;font-size: 12px;padding: 10px 2px;">Qty</th>
                                                                <th style="width: 12%;font-size: 12px;padding: 10px 2px;">Price</th>
                                                                <th style="width: 10%;font-size: 12px;padding: 10px 2px;">Amount</th>
                                                                <th style="width: 10%;font-size: 12px;padding: 10px 2px;">Tax </th>
                                                                <th style="width: 15%;font-size: 12px;padding: 10px 2px;">Tax Amount</th>
                                                                <th style="width: 20%;font-size: 12px;padding: 10px 2px;">Total Amount</th>
                                                        </tr>

                                                        <?php
                                                        $qty_total = 0;
                                                        $amount_total = 0;
                                                        $tax_amount = 0;
                                                        $i = 0;
                                                        foreach ($order_details as $value) {
                                                                $tax = 0;
                                                                $total_price = 0;
                                                                $tax_value = '';
                                                                $i++;
                                                                if ($value->item_type == 1) {
                                                                        $product = common\models\CreateYourOwn::find()->where(['id' => $value->product_id])->one();
                                                                } else {
                                                                        $product = common\models\Product::find()->where(['id' => $value->product_id])->one();
                                                                        
                                                                        $value->amount = $value->amount - $value->tax;
                                                                        $price = $value->quantity * $value->amount;
                                                                        if (isset($value->tax))
                                                                                $tax = $value->tax;
                                                                }
if (isset($value->tax_id)) {
                                                                        $tax_detail = common\models\Tax::findOne($value->tax_id);
                                                                        if (!empty($tax_detail))
                                                                                $tax_value = $tax_detail->name;
                                                                }
                                                                $total_price = $price + $tax;
                                                                $tax_amount += $tax;
                                                                ?>

                                                                <tr>
                                                                        <td style="width: 5%;font-size: 11px;padding: 10px 5px;"><?= $i ?></td>
                                                                        <td style="width: 20%;font-size: 11px;padding: 10px 2px;"><?= $value->item_type == 1 ? 'Custom Perfume' : $product->product_name; ?></td>
                                                                        <td style="width: 5%;font-size: 11px;padding: 10px 2px;"><?= $value->quantity ?></td>
                                                                        <td style="width: 11%;font-size: 11px;padding: 10px 2px;"><?= sprintf('%0.2f', $value->amount); ?></td>
                                                                        <td style="width: 15%;font-size: 11px;padding: 10px 2px;"><?= sprintf('%0.2f', $value->quantity * $value->amount); ?></td>
                                                                        <td style="width: 11%;font-size: 11px;padding: 10px 2px;"><?= $tax_value ?></td>
                                                                        <td style="width: 11%;font-size: 11px;padding: 10px 2px;"><?= sprintf('%0.2f', $tax); ?></td>
                                                                        <td style="width: 20%;font-size: 11px;padding: 10px 2px;"><?= sprintf('%0.2f', $total_price); ?></td>
                                                                </tr>
                                                                <?php
                                                                $qty_total += $value->quantity;
                                                                $amount_total += $value->rate;
                                                        }
                                                        $shiplimit = \common\models\Settings::findOne('1')->value;
                                                        if ($shiplimit > $amount_total) {
                                                                $delivary_charge = \common\models\Settings::findOne('2')->value;
                                                        }
                                                        ?>

                                                        <tr>
                                                                <td style="width: 10%;font-size: 11px;padding: 10px 5px;"></td>
                                                                <td style="width: 20%;font-size: 11px;padding: 10px 2px;">Delivery Charges</td>
                                                                <td style="width: 13%;font-size: 11px;padding: 10px 2px;"></td>
                                                                <td style="width: 11%;font-size: 11px;padding: 10px 2px;"><?= sprintf('%0.2f', $order_master->shipping_charge); ?></td>
                                                                <td style="width: 15%;font-size: 11px;padding: 10px 2px;"></td>
                                                                <td style="width: 11%;font-size: 11px;padding: 10px 2px;"></td>
                                                                <td style="width: 11%;font-size: 11px;padding: 10px 2px;"></td>
                                                                <td style="width: 11%;font-size: 11px;padding: 10px 2px;"><?= sprintf('%0.2f', $order_master->shipping_charge); ?></td>
                                                        </tr>
                                                        <?php
                                                        $promotion_disvount = 0;
                                                        if (isset($promotions) && $promotions > 0) {
                                                                $promotion_disvount = $promotions;
                                                                ?>

                                                                <tr>
                                                                        <td style="width: 10%;font-size: 11px;padding: 10px 5px;"></td>
                                                                        <td style="width: 20%;font-size: 11px;padding: 10px 2px;">Delivery Charges</td>
                                                                        <td style="width: 13%;font-size: 11px;padding: 10px 2px;"></td>
                                                                        <td style="width: 11%;font-size: 11px;padding: 10px 2px;"><?= sprintf('%0.2f', $promotions); ?></td>
                                                                        <td style="width: 15%;font-size: 11px;padding: 10px 2px;"></td>
                                                                        <td style="width: 11%;font-size: 11px;padding: 10px 2px;"></td>
                                                                        <td style="width: 11%;font-size: 11px;padding: 10px 2px;"></td>
                                                                        <td style="width: 11%;font-size: 11px;padding: 10px 2px;"><?= sprintf('%0.2f', $promotions); ?></td>
                                                                </tr>
                                                        <?php } ?>



                                                </table>
                                        </div>
                                        <br/>
                                        <?php $grand_total = $amount_total + $order_master->shipping_charge - $promotion_disvount; ?>
                                        <div class="invoice-details"style="margin-top: 10px;">
                                                <table style="width:100%;border-collapse: collapse;text-align: left;">
                                                        <tr style="border-top: 1px solid #a09c9c;">
                                                                <th colspan="3"style="width: 50%;font-size: 12px;padding: 10px 2px;"> <?php echo ucwords(Yii::$app->NumToWord->ConvertNumberToWords(round($grand_total, 2))) . ' Only'; ?></th>
                                                                <th  style="width: 30%;font-size: 12px;padding: 10px 2px;text-align: right;font-weight: normal">TOTAL AMT OF VAT [AED] : </th>
                                                                <th style="width: 15%;font-size: 12px;padding: 10px 13px;font-weight: normal"><?= sprintf('%0.2f', $tax_amount); ?></th>
                                                                <th style="width: 15%;font-size: 12px;padding: 10px 2px;text-align: right;"></th>
                                                        </tr>
                                                        <tr style="">
                                                                <th colspan="3"style="width: 50%;font-size: 12px;padding: 10px 2px;"></th>
                                                                <th colspan="" style="width: 30%;font-size: 12px;padding: 10px 2px;text-align: right;">TOTAL AMT INCL VAT [AED] : </th>
                                                                <th style="width: 15%;font-size: 12px;padding: 10px 2px;text-align: right;"></th>
                                                                <th style="width: 15%;font-size: 12px;padding: 10px 13px;text-align: right;"><?= sprintf('%0.2f', $grand_total); ?> </th>
                                                        </tr>

                                                </table>
                                        </div>
                                        <div style="clear:both"></div>
                                        <br/>


                                        <div class="invoice-details"style="margin-bottom: 10px">
                                                <table style="width:100%;">
                                                        <tr>
                                                                <th style="width:50%;font-size: 10px;padding: 10px 0px;text-align: justify;font-weight: normal">
                                                                        If there is a problem with the delivery of the item , kindly do let us know so that
                                                                        it can be fixed as soon as possible. Upon the receipt of the products, we kindly insist you to leave a feedback to
                                                                        info@coralperfumes.com.
                                                                </th>
                                                                <th style="width:50%;font-size: 10px;padding: 10px 0px;text-align: right">


                                                                </th>

                                                        </tr>



                                                </table>
                                        </div>

                                </td></tr>
                </tbody>

        </table>
</div>

<script             type="text/javascript">

        window.print();
        setTimeout(function () {
                window.close();
        }, 500);
</script>