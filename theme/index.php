<?php
/**
 * The main template file (Modularized Version)
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package scs_consultoria
 */

get_header();
?>

<div class="min-h-screen bg-netword-secondary cyber-grid">

	<!-- Hero Section -->
	<?php get_template_part( 'template-parts/layout/hero', 'section' ); ?>

	<!-- Trust/Confidence Section -->
	<?php get_template_part( 'template-parts/layout/trust', 'section' ); ?>

	<!-- Problem Exposition Section -->
	<?php get_template_part( 'template-parts/layout/problem', 'section' ); ?>

	<!-- Legal Milestones Section -->
	<?php get_template_part( 'template-parts/layout/legal-milestones', 'section' ); ?>

	<!-- Urgency Section -->
	<?php get_template_part( 'template-parts/layout/urgency', 'section' ); ?>

	<!-- Rights/How to Access Section -->
	<?php get_template_part( 'template-parts/layout/rights', 'section' ); ?>

	<!-- Legal Timeline Section -->
	<?php get_template_part( 'template-parts/layout/timeline', 'section' ); ?>

	<!-- Alternativas Tradicionais -->
	<?php get_template_part( 'template-parts/layout/alternativas', 'section' ); ?>

	<!-- Revolução Tecnológica -->
	<?php get_template_part( 'template-parts/layout/revolucao', 'section' ); ?>

	<!-- Como Funciona -->
	<?php get_template_part( 'template-parts/layout/passos', 'section' ); ?>

	<!-- Estimativas de Recuperação -->
	<?php get_template_part( 'template-parts/layout/estimativas', 'section' ); ?>

	<!-- Benefícios Concretos -->
	<?php get_template_part( 'template-parts/layout/beneficios', 'section' ); ?>

	<!-- Caso de Sucesso -->
	<?php get_template_part( 'template-parts/layout/caso', 'section' ); ?>

	<!-- Garantia -->
	<?php get_template_part( 'template-parts/layout/garantia', 'section' ); ?>

	<!-- Depoimentos -->
	<?php get_template_part( 'template-parts/layout/depoimentos', 'section' ); ?>

	<!-- Perguntas Frequentes -->
	<?php get_template_part( 'template-parts/layout/faq', 'section' ); ?>

	<!-- CTA Final -->
	<?php get_template_part( 'template-parts/layout/cta', 'section' ); ?>

	<!-- Process/How it Works Section -->
	<?php get_template_part( 'template-parts/layout/process', 'section' ); ?>

	<!-- Contact Form Section -->
	<?php get_template_part( 'template-parts/layout/contact', 'section' ); ?>

</div>

<?php
get_footer();