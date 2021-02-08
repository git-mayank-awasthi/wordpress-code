<?php
/**
 * Template Name: EMHS ENQUIRY
 * Version: 1.0
 * Description: Developed by Mayank
 * Author: Mayank  Awasthi
 * License: GPLv2
 * Required PDF Version: 4.0
 */
/* Prevent direct access to the template (always good to include this) */
if (!class_exists('GFForms')) {
    return;
}
?>
<!-- Any PDF CSS styles can be placed in the style tag below -->
<style>
    h1 {
        text-align: left;
        text-transform: uppercase;
        color: #000; 
        border-bottom: 1px solid #999;
    }
    footer{
        text-align: center;
        text-transform: uppercase;
        color: #a62828; 
        border-top: 1px double #999;
    }
    .sep{
        border-right: 1px solid grey;
        border-left: 1px solid grey;
    }
    .center{
        text-align: right;
        float: right;
    }
    table {
        width: 100%;
    }
    .gfield_list{
        border:1px solid;
        border-collapse: collapse;
        border-spacing: 10px;

    }
    .gfield_list .contents td{
        border:1px solid;
        text-align:center;
        padding:6px;
    }
    .gfield_list .contents td:nth-child(1){
        width: 40%;
    }
    .gfield_list .contents td:nth-child(4){
        width: 50%;
    }
    th {
        height: 5px;
        text-align: center;
        border:1px solid;
        padding:6px;
    }
    .powered{
        text-align: right;
        vertical-align: bottom;
        font-size: 8px;
        color: grey;
    }
    .fkmtd{
        word-spacing: 4px;
        line-height: 1.4;
    }
    .mainhdfkm{
        background-color:#0f0f63;color:white;padding:0px;margin-bottom:10px;font-size: 20px;
    }
    .ftd{
        padding-left:15px;
        word-wrap:break-word;
    }
    .ftd td{
        text-align: justify;
        text-justify: inter-word;
        font-size:12px;
    }
    .ftd td>p>b{
        text-align: justify;
        text-justify: inter-word;
        font-size:10px;
    }
    .fkmli{
        font-size:11px;
    }

    .ftddd{
        padding-left:40px;
    }
    .hfkm{
        font-size:1.1em;
    }
    .headingfkm{
        font-size: 13px;
        text-transform: uppercase;
        text-decoration: underline;

    }
    .rotateimg180 {
        -webkit-transform:rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    body .gform_wrapper .gform_body .gform_fields .gfield {border: 1px solid red}
    body #gform_wrapper_1 .gform_body .gform_fields .gfield {border: 1px solid blue}
</style>

<!-- The PDF content should be placed in here -->
<table>
    <!--<watermarkimage src="<?php echo PDF_TEMPLATE_LOCATION; ?>images/background.jpg" alpha="0.2" />-->
    <?php
// echo $form_data['field']['Email'];
//    echo "<pre>";
//    print_r($form_data);
//    die('Under testing');
    $class = '';
    if ($form_data['entry_id'] == 172 || $form_data['entry_id'] == 174) {
        $class = 'rotateimg180';
    }
    ?>       

    <tr>
        <td class="center">
            <img src="<?php echo PDF_TEMPLATE_LOCATION; ?>images/headerlogo.jpg">
        </td>
    </tr>
</table>
<div class='mainhdfkm'>&nbsp; ONLINE ENQUIRY FORM</div>
<table>
    <tr> 
        <td>
            <table>
                <tr>
                    <td>
                        <ul class="fkmli">
                            <li>This form is not a Registration Form.</li>
                            <li>This form is only for the information of the child.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="ftd">
                        Form No. : <input style="width:130px;border:1px solid;height: 25px;" type="name" value=''/> <span style="font-size: 10px">(For office use only)</span>
                        <br> 
                        Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:     
                        <span style=" width:130px;"><?php echo $form_data['date_created']; ?></span>
                    </td>

                </tr>
                <tr>
                    <td>
                        &nbsp; &nbsp; &nbsp;
                    </td>
                </tr>
            </table>
        </td>
        <td align='right'><img class='<?php echo $class; ?>' width="100" height="100" src="<?php echo $form_data['field']['Upload Photo']['url']; ?>"></td>
    </tr>
</table>

<div class="headingfkm ftd"><b>Child's Personal Information<b></div>
            <table class='table ftd'>
                <tr>
                    <td width="60%" >
                        Full Name of the Child :
                        &nbsp;&nbsp;<b>
                            <?php
                            echo ucfirst($form_data['field']['Name']['first']);
                            echo isset($form_data['field']['Name']['last']) ? " " . ucfirst($form_data['field']['Name']['last']) : "";
                            ?>
                        </b>
                    </td>
                    <td width="40%" >
                        Gender :&nbsp;&nbsp;<b><?php echo $form_data['field']['Gender_name']; ?></b>
                    </td>
                </tr>
                <tr>
                    <td>
                        Date of Birth :&nbsp;&nbsp;<b><?php echo $form_data['field']['Date of Birth']; ?></b>
                    </td>
                    <td>
                        Place of Birth :&nbsp;&nbsp;<b><?php echo $form_data['field']['Place of Birth']; ?></b>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        Date of Birth in words :&nbsp;&nbsp;<b><?php echo $form_data['field']['Date of Birth in Words']; ?></b>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nationality :&nbsp;&nbsp;<b><?php echo $form_data['field']['Nationality']; ?></b>&nbsp;      Religion :&nbsp;&nbsp;<b><?php echo $form_data['field']['Religion']; ?></b> 
                    </td>
                    <td>
                        Caste :&nbsp;&nbsp;<b><?php echo $form_data['field']['Caste']; ?></b> &nbsp;&nbsp;        Category :&nbsp;&nbsp;<b><?php echo $form_data['field']['Category']; ?></b>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Residential Address :&nbsp;&nbsp;<b><?php echo $form_data['field']['Residential Address']; ?></b>
                    </td>
                </tr>
                <tr>
                    <td>
                        Residential Phone No. :&nbsp;&nbsp;<b><?php echo $form_data['field']['Residential Phone No.']; ?></b>
                    </td>
                    <td >
                        Email :&nbsp;&nbsp;<b><?php echo $form_data['field']['14.Email']; ?></b>
                    </td>
                </tr>
            </table>
            <br>
            <div class='headingfkm ftd'><b>Child's Academic Information</b></div>
            <br>
            <table class='table ftd'>
                <tr>
                    <td colspan="2">
                        Name of the Last School Attended :&nbsp;&nbsp;<b><?php echo ucfirst($form_data['field']['Name of the Last School Attended']); ?></b>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" >
                        Place :&nbsp;&nbsp;<b><?php echo ucfirst($form_data['field']['Place']); ?></b>
                    </td>
                </tr>
                <tr>
                    <td  colspan="2">
                        Last Class Attended :&nbsp;&nbsp;<b><?php echo strtoupper($form_data['field']['Last Class Attended']); ?></b>
                    </td>


                </tr>
                <tr>

                    <td colspan="2" >
                        Class in which admission is required :&nbsp;&nbsp;<b><?php echo strtoupper($form_data['field']['Class in which admission is required']); ?></b>
                    </td>
                </tr>
                <?php
                if ($form_data['field']['Class in which admission is required'] == 'XI') {
                    if (!empty($form_data['field']['66.Kindly choose your stream'])) {
                        ?>
                        <tr>
                            <td colspan="2">
                                Your Stream :&nbsp;&nbsp; <b><?php echo strtoupper($form_data['field']['66.Kindly choose your stream']); ?></b>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
                <?php
                $stringss1 = '';
                if ($form_data['field']['Class in which admission is required'] == 'IX') {
                    if (!empty($form_data['field']['67.Kindly choose from the following subjects'])) {
                        ?>
                        <tr>
                            <td colspan="2">
                                Preferred Subject :&nbsp;&nbsp; <b><?php echo strtoupper($form_data['field']['67.Kindly choose from the following subjects']); ?></b>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2">
                        The parent is an alumni of  The Emerald Heights International School :&nbsp;&nbsp;<b><?php echo $form_data['field']['The parent is an alumni of The Emerald Heights International School'] != '' ? strtoupper($form_data['field']['The parent is an alumni of The Emerald Heights International School']) : 'No'; ?></b>
                    </td>
                </tr>
            </table>
            <br>
            <div class='headingfkm ftd'><b>Personal Information</b></div>
            <br>
            <table class='table ftd'>
                <tr>
                    <td colspan="2">
                        Does your child have a Brother(s) or Sister(s) ? 
                        <b><?php
                            if ($form_data['field']['Does your child have a Brother(s) or Sister(s) ?'] === 'Yes') {
                                $stringis = $form_data['field']['26'];
                                $strreplace12 = str_replace('Brother and Sister', "", $stringis);
                                echo $strreplace12 = str_replace('<th>', "<th style='width:25%'>", $stringis);
                                ?>

                                <?php
                            } else {
                                echo 'No';
                            }
                            ?></b>
                    </td>

                </tr>  
            </table>
            <br>
            <br>
            <div class='headingfkm ftd'><b>Parent's Information</b></div>
            <table class="table ftd">
                <tr>
                    <td width="70%"><b>Father's Particulars</b></td>
                    <td width="30%" align="right">
                        <img class='<?php echo $class; ?>' width="100" height="100" src="<?php echo $form_data['field']["29.Upload Photo"]['url']; ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Full Name :&nbsp;&nbsp;<b><?php echo ucfirst($form_data['field']['30.Full Name']); ?></b>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Academic Qualification :&nbsp;&nbsp;<b><?php echo $form_data['field']['31.Academic Qualification']; ?></b>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        University :&nbsp;&nbsp;<b><?php echo $form_data['field']['32.University']; ?></b>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Last College Attended :&nbsp;&nbsp;<b><?php echo $form_data['field']['33.Last College Attended']; ?></b>
                    </td>

                </tr>
                <tr>
                    <td colspan="2">
                        Last School Attended :&nbsp;&nbsp;<b><?php echo $form_data['field']['63.Last School Attended']; ?></b>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Occupation :&nbsp;&nbsp;<b><?php echo $form_data['field']['34.Occupation']; ?></b>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Office Address :&nbsp;&nbsp;<b><?php echo $form_data['field']['35.Office Address']; ?></b>
                    </td>
                </tr>
                <tr>
                    <td width="60%">
                        Office Phone No. :&nbsp;&nbsp;<b><?php echo $form_data['field']['36.Office Phone No.']; ?></b>
                    </td>
                    <td width="40%">
                        Mobile No. :&nbsp;&nbsp;<b><?php echo $form_data['field']["52.Mobile"]; ?></b>
                    </td>

                </tr>
                <tr>
                    <td colspan="2"> 
                        Email :&nbsp;&nbsp;<b><?php echo $form_data['field']["37.Email"]; ?></b>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td width="70%"><b>Mother's Particulars</b></td>
                    <td width="30%" align="right">
                        <img class='<?php echo $class; ?>' width="100" height="100" src="<?php echo $form_data['field']["39.Upload Photo"]['url']; ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Full Name :&nbsp;&nbsp;<b><?php echo ucfirst($form_data['field']['41']); ?> </b>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Academic Qualification :&nbsp;&nbsp;<b><?php echo $form_data['field']['42']; ?></b>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        University :&nbsp;&nbsp;<b><?php echo $form_data['field']['43.University']; ?></b>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Last College Attended : <b><?php echo $form_data['field']['44.Last College Attended']; ?></b>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Last School Attended :&nbsp;&nbsp;<b><?php echo $form_data['field']['45.Last School Attended']; ?></b>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Occupation :&nbsp;&nbsp;<b><?php echo $form_data['field']['46.Occupation']; ?></b>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Office Address :&nbsp;&nbsp;<b><?php echo $form_data['field']['47.Office Address']; ?></b>
                    </td>
                </tr>
                <tr>
                    <td width="60%">
                        Office Phone No. :&nbsp;&nbsp;<b><?php echo $form_data['field']["48.Office Phone No."]; ?></b>
                    </td>
                    <td width="40%">
                        Mobile No. :&nbsp;&nbsp;<b><?php echo $form_data['field']["50.Mobile"]; ?></b>
                    </td>
                </tr>

                <tr>

                    <td colspan="2">
                        Email :&nbsp;&nbsp;<b><?php echo $form_data['field']["53.Email"]; ?></b>
                    </td>
                </tr>
            </table>
            <br>
            <div class='headingfkm ftd'><b>Child's Documents</b></div>
            <br>
            <table class="table ftd">
                <tr>
                    <td >Birth Certificate</td>
                    <td >
                        <?php if (!empty($form_data['field']['57.Birth Certificate'])) { ?>
                            <a style=" text-decoration: none;" href="<?php echo $form_data['field']['Birth Certificate'][0]; ?>" target="_blank">Birth Certificate</a>
                            <?php
                        } else {
                            echo "NA";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Residence Address Proof</td>
                    <td>
                        <?php if (!empty($form_data['field']['Residence Address Proof'])) { ?>
                            <a style=" text-decoration: none;" href="<?php echo $form_data['field']['Residence Address Proof'][0]; ?>" target="_blank">Residence Address Proof</a>
                            <?php
                        } else {
                            echo "NA";
                        }
                        ?>
                    </td>
                </tr>
                <?php if ($form_data['field']['Category'] != 'General') { ?>
                    <tr>
                        <td>Caste Certificate</td>
                        <td>
                            <?php if (!empty($form_data['field']['Caste Certificate'])) { ?>
                                <a style=" text-decoration: none;" href="<?php echo $form_data['field']['Caste Certificate'][0]; ?>" target="_blank">Caste Certificate</a>
                                <?php
                            } else {
                                echo "NA";
                            }
                            ?>
                        </td>
                    </tr>
                <?php } ?>
                <tr>
                    <td>Medical Fitness Certificate by Physician</td>
                    <td>
                        <?php if (!empty($form_data['field']['Medical Fitness Certificate by Physician'])) { ?>
                            <a style=" text-decoration: none;" href="<?php echo $form_data['field']['Medical Fitness Certificate by Physician'][0]; ?>" target="_blank">Medical Fitness Certificate by Physician</a>
                            <?php
                        } else {
                            echo "NA";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Previous Year's Marksheets</b></td>
                </tr>
                <tr>
                    <td>Marksheet 1</td>
                    <td>
                        <?php if (!empty($form_data['field']['Marksheet 1'])) { ?>
                            <a style=" text-decoration: none;" href="<?php echo $form_data['field']['Marksheet 1'][0]; ?>" target="_blank">Marksheet 1</a>
                            <?php
                        } else {
                            echo "NA";
                        }
                        ?>
                    </td>
                </tr>
                <?php if (!empty($form_data['field']['Marksheet 2'])) { ?>
                <tr>
                    <td>Marksheet 2</td>
                    <td>
                        <?php if (!empty($form_data['field']['Marksheet 2'])) { ?>
                            <a style=" text-decoration: none;" href="<?php echo $form_data['field']['Marksheet 2'][0]; ?>" target="_blank">Marksheet 2</a>
                            <?php
                        } else {
                            echo "NA";
                        }
                        ?>
                    </td>
                </tr>
                <?php } ?>
            </table>
            <br>
            <br>
            <div class='headingfkm ftd'><b>Declaration</b></div>
            <ul class="ftd" style="font-size: 12px; ">
                <li>
                    I hereby certify that the above information is true and correct.
                </li>

            </ul>