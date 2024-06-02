
<!DOCTYPE html>
<html lang="en">
<head>
<style>

@page {
   margin: 0mm;
}

/* Handle Gravity Forms CSS Ready Classes */
.row-separator {
    clear: both;
    padding: 1.25mm 0;
}

.gf_left_half,
.gf_left_third, .gf_middle_third,
.gf_first_quarter, .gf_second_quarter, .gf_third_quarter,
.gf_list_2col li, .gf_list_3col li, .gf_list_4col li, .gf_list_5col li {
    float: left;
}

.gf_right_half,
.gf_right_third,
.gf_fourth_quarter {
    float: right;
}

.gf_left_half, .gf_right_half,
.gf_list_2col li {
    width: 49%;
}

.gf_left_third, .gf_middle_third, .gf_right_third,
.gf_list_3col li {
    width: 32.3%;
}

.gf_first_quarter, .gf_second_quarter, .gf_third_quarter, .gf_fourth_quarter {
    width: 24%;
}

.gf_list_4col li {
    width: 24%;
}

.gf_list_5col li {
    width: 19%;
}

.gf_left_half, .gf_right_half {
    padding-right: 1%;
}

.gf_left_third, .gf_middle_third, .gf_right_third {
    padding-right: 1.505%;
}

.gf_first_quarter, .gf_second_quarter, .gf_third_quarter, .gf_fourth_quarter {
    padding-right: 1.333%;
}

.gf_right_half, .gf_right_third, .gf_fourth_quarter {
    padding-right: 0;
}

/* Don't double float the list items if already floated (mPDF does not support this ) */
.gf_left_half li, .gf_right_half li,
.gf_left_third li, .gf_middle_third li, .gf_right_third li {
    width: 100% !important;
    float: none !important;
}

/*
 * Headings
 */
h3 {
    margin: 1.5mm 0 0.5mm;
    padding: 0;
}

/*
 * Quiz Style Support
 */
.gquiz-field {
    color: #666;
}

.gquiz-correct-choice {
    font-weight: bold;
    color: black;
}

.gf-quiz-img {
    padding-left: 5px !important;
    vertical-align: middle;
}

/*
 * Survey Style Support
 */
.gsurvey-likert-choice-label {
    padding: 4px;
}

.gsurvey-likert-choice, .gsurvey-likert-choice-label {
    text-align: center;
}

/*
 * Terms of Service (Gravity Perks) Support
 */
.terms-of-service-agreement {
    padding-top: 2px;
    font-weight: bold;
}

.terms-of-service-tick {
    font-size: 150%;
}

/*
 * List Support
 */
ul, ol {
    margin: 0;
    padding-left: 1mm;
    padding-right: 1mm;
}

li {
    margin: 0;
    padding: 0;
    list-style-position: inside;
}

/*
 * Header / Footer
 */
.alignleft {
    float: left;
}

.alignright {
    float: right;
}

.aligncenter {
    text-align: center;
}

p.alignleft {
    text-align: left;
    float: none;
}

p.alignright {
    text-align: right;
    float: none;
}

/*
 * Independant Template Styles
 */
.row-separator .gfpdf-field {
    margin-bottom: 10px;
}

#form_title {
    margin: 0;
    font-size: 150%;
}

.product-field-title {
    margin: 0;
}

.gfpdf-field .label {
   padding-bottom: 5px;
}

.gfpdf-field.value {
      margin: auto;
}

.gfield_list th, table.entry-products td.emptycell, table.entry-products th {
    background: none;
}

.footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  text-align: center;
}

</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="height: 297mm; position: relative;">

<img src="https://www.geomatika.edu.my/wp-content/uploads/2023/05/UGM-Header-New.jpg" width="100%">

<div style="padding-left: 70px; padding-right: 70px">

	<p style="text-align: right; font-weight: italic;">
		Ref: UGM/MKTG/{PILIHAN DAERAH:23}/<?php echo date('dm'); ?>/<?php echo date('Y'); ?>
		<br>Date: <?php echo date('d M Y'); ?>
	</p>
	<p style="text-transform: uppercase; font-weight: bold">
NAMA : {NAMA PENUH (CONTOH: SITI BINTI ALI):22}<br>
NO KP : {NOMBOR KAD PENGENALAN (CONTOH: 000000-00-0000):19}</p>

	<p>Saudara/i,</p>

	<ul><strong>TAWARAN KEMASUKAN BERSYARAT KE PERINGKAT DIPLOMA, UNIVERSITI GEOMATIKA MALAYSIA (UGM)</strong></ul>

	<p>Sukacita dimaklumkan bahawa Universiti Geomatika Malaysia (UGM) dengan ini menawarkan saudara/i mengikuti pengajian di peringkat Diploma. Tawaran pengajian adalah seperti butiran di bawah:-</p>
	
	<hr><p style="margin:50px">Program Pengajian: <div style="text-transform: uppercase; text-align: justify; font-weight: bold;">{PROGRAM (CONTOH: DIPLOMA SAINS PERUBATAN & KESIHATAN):11}</div></p>

	<p style="margin:50px">Sesi Pengambilan: <div style="text-align: justify; font-weight: bold;">JUN 2023</div></p>

	<p style="margin:50px">Kampus: <div style="text-align: justify; font-weight: bold;"> SETIAWANGSA, KUALA LUMPUR</div></p>

	<p style="margin:50px">Tempoh Pengajian: <div style="text-align: justify; font-weight: bold;"> 3 TAHUN</div></p>

	<br>
	<ol start="2" style="text-align: justify;">
		<li style="padding-bottom:20px">
			Sehubungan dengan itu,saudara/i di kehendaki melaporkan diri seperti butiran di bawah:

	<p style="margin:50px">Masa: <div style="text-transform: uppercase; text-align: justify; font-weight: bold;">10.00 PAGI</div></p>

	<p style="margin:50px">Tempat Pendaftaran: <div style="text-align: justify; font-weight: bold;">UNIVERSITY INFORMATION CENTER (UIC)<br>LOT 6-2-14, TINGKAT 2, PRIMA PENINSULAR<br>JALAN SETIAWANGSA 11, TAMAN SETIAWANGSA<br>54200 KUALA LUMPUR</div></p>

		</li>
		<li style="padding-bottom:20px">
			Tawaran Pengajian ini adalah tertakluk kepada syarat-syarat seperti berikut:
			<ol type="I">
		      <li>
				Menepati syarat-syarat kemasukan Diploma seperti yang telah diluluskan oleh Kementerian Pengajian Tinggi dalam surat kelulusan menjalankan program. (Sila rujuk kelayakan pada brosur)
		      </li>
		      <li>
				Anda dinasihatkan membawa keperluan secukupnya semasa sesi pengajian dengan lengkap.
		      </li>
			<li>
				Penginapan disediakan dan diberi keutamaan kepada pelajar di luar kawasan Kuala Lumpur.
			</li>
		    </ol>
		</li>
		<li>
			Sekiranya terdapat sebarang permasalahan, sila hubungi Cik Bella di talian 012-686 7624 atau emel <a href="mailto:fatinnabilla@geomatika.edu.my" target="_top">fatinnabilla@geomatika.edu.my</a>
		</li>
	</ol>


	<br><p>Sekian, terima kasih</p>

	<br><p>Nota Penting:</p>
	<ol type="1" style="text-align: justify;">
		<li>
			<li>Tawaran untuk mengikuti program akademik ini tertakluk kepada syarat kelayakan masuk yang telah ditetapkan oleh Kementerian Pengajian Tinggi ( Sila rujuk kelayakan pada brosur).</li>
		</li>
		<li>
			<li>Pihak UGM berhak menolak tawaran bersyarat ini sekiranya maklumat yang diberikan adalah palsu atau tidak mencukupi.</li>
		</li>
		<li>
			<li>Sebarang bentuk pinjaman adalah tertakluk kepada syarat dan terma agensi. UGM tidak bertanggungjawab terhadap sebarang penolakan permohonan akibat perubahan terma.</li>
		</li>
	</ol>
	<p>Yang Menjalankan Tugas</p>
	<br><p><strong>Pendaftar</strong><br><strong>Universiti Geomatika Malaysia</strong></p>
	<br><p><li>Surat ini menggunakan cetakan berkomputer. Tandatangan tidak diperlukan</li></p>
</div>

<div class="footer">
	<img src="https://www.geomatika.edu.my/wp-content/uploads/2023/05/UGM-Footer-New.jpg" width="100%">
</div>
<!--Generate our HTML markup-->

</body>
</html>

<?php

/*
 * Template Name: Registration Roadshow
 * Version: 1.0
 * Description: Geomatika Conditional Offer Letter
 * Author: Azila
 * Author URI: https://geomatika.edu.my
 * Group: Core
 * License: GPLv2
 * Required PDF Version: 4.0-alpha
 * Tags: Header, Footer, Background, Optional HTML Fields, Optional Page Fields
 */

/* Prevent direct access to the template */
if ( ! class_exists( 'GFForms' ) ) {
    return;
}

/*
 * All Gravity PDF 4.x templates have access to the following variables:
 *
 * $form (The current Gravity Form array)
 * $entry (The raw entry data)
 * $form_data (The processed entry data stored in an array)
 * $settings (the current PDF configuration)
 * $fields (an array of Gravity Form fields which can be accessed with their ID number)
 * $config (The initialised template config class – eg. /config/blank-slate.php)
 * $gfpdf (the main Gravity PDF object containing all our helper classes)
 * $args (contains an array of all variables - the ones being described right now - passed to the template)
 */
?>;

<?php
//Include styles needed for the PDF //

// Output our HTML markup //

//Load our core-specific styles from our PDF settings which will be passed to the PDF template $config array//
$show_form_title      = ( ! empty( $settings['show_form_title'] ) && $settings['show_form_title'] == 'Yes' )            ? true : false;
$show_page_names      = ( ! empty( $settings['show_page_names'] ) && $settings['show_page_names'] == 'Yes' )            ? true : false;
$show_html            = ( ! empty( $settings['show_html'] ) && $settings['show_html'] == 'Yes' )                        ? true : false;
$show_section_content = ( ! empty( $settings['show_section_content'] ) && $settings['show_section_content'] == 'Yes' )  ? true : false;
$enable_conditional   = ( ! empty( $settings['enable_conditional'] ) && $settings['enable_conditional'] == 'Yes' )      ? true : false;
$show_empty           = ( ! empty( $settings['show_empty'] ) && $settings['show_empty'] == 'Yes' )                      ? true : false;
 
$html_config = array(
    'settings'  => $settings,
    'meta'      => array(
        'echo'                     => true, /* whether to output the HTML or return it */
        'exclude'                  => true, /* whether we should exclude fields with a CSS value of 'exclude'. Default to true */
        'empty'                    => $show_empty, /* whether to show empty fields or not. Default is false */
        'conditional'              => $enable_conditional, /* whether we should skip fields hidden with conditional logic. Default to true. */
        'show_title'               => $show_form_title, /* whether we should show the form title. Default to true */
        'section_content'          => $show_section_content, /* whether we should include a section breaks content. Default to false */
        'page_names'               => $show_page_names, /* whether we should show the form's page names. Default to false */
        'html_field'               => $show_html, /* whether we should show the form's html fields. Default to false */
        'individual_products'      => false, /* Whether to show individual fields in the entry. Default to false - they are grouped together at the end of the form */
        'enable_css_ready_classes' => true, /* Whether to enable or disable Gravity Forms CSS Ready Class support in your PDF */
    ),
);
?>