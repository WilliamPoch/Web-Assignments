
<style type="text/css">

.myLabel {
    color: #CCCCCC;
}

<!--
    div.zone { border: 2mm solid #EEEEEE; border-radius: 5mm; background: #FFFFFF; border-collapse: collapse; padding:3mm; font-size: 2.7mm;}
    h1 { padding: 0; margin: 0; color: #DD0000; font-size: 10mm; }
    h2 { padding: 0; margin: 0; color: #222222; font-size: 5mm; }
    h3 { padding: 0; margin: 0; color: #222222; font-size: 10mm; }
-->
</style>
<?php
session_start();
?>


<page format="176x250" orientation="L" backcolor="#FFFFFF" style="font: arial;">

    <table style="width: 96%;border: none;" cellspacing="4mm" cellpadding="0">
        <tr>
            <td style="width: 75%; vertical-align: top;">
                <div class="zone myLabel" style="height: 34mm;position: relative;font-size: 5mm;">
                    Event<br><br>
                    <h1>EVENT TITLE</h1>     
                     
                    <br>Date/Time <h2>15 November 2018 from 10:00 to 12:00 hours</h2>
                    <br>Localtion <h2>Novotel Bangkok</h2>
                </div>
            </td>
            <td style="width: 25%; vertical-align: top;">
                <div class="zone myLabel" style="height: 20mm;position: relative;font-size: 5mm;">
                    <img src="<?php echo __DIR__ ; ?>/promo_picture.jpg" width="200">
                    <br><br>Reference Number<br>
                    <h2>1234567</h2>
                    <br>
                </div>
            </td>
        </tr>

        <tr>
            <td style="width: 75%; vertical-align: top;">
                <div class="zone myLabel" style="height: 24mm;position: relative;font-size: 5mm;">
                    Name<br><br>
                    <h3>William Sivutha Poch</h3>           
                </div>
            </td>
            <td style="width: 25%; vertical-align: top;">
                <div class="zone myLabel" style="position: relative; text-align: center; font-size: 5mm;">
                    <qrcode value="<?php echo $num."\n".$nom."\n".$date; ?>" ec="Q" style="width: 24mm; border: none;" ></qrcode>
                </div>            
            </td>
        </tr>
    </table>

</page>
