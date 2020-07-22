<?php
/**
 * Template Name: Toppeq resources
 */
if (isset($_GET["file"]) && !empty($_GET["file"])) {
    $file = urldecode($_GET["file"]);
    $uploads = wp_upload_dir();
    $base_url = $uploads['baseurl'];
    if(is_ssl()){
        $base_url = str_replace( 'http://', 'https://',  $base_url);
    }
    $getFile = str_replace($base_url, $uploads['basedir'], $file );
    if (file_exists($getFile)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header("Content-Type: application/force-download");
        header('Content-Disposition: attachment; filename=' . urlencode(basename($getFile)));
        // header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($getFile));
        ob_clean();
        flush();
        readfile($getFile);
        exit;
    } 
}
get_header();
?>


<?php
    if (have_posts()) {
        while (have_posts()) {
        the_post(); ?>
            <div class="container">
                <div class="page-title">
                    <h2 class="section-title f-25 text-uppercase py-md-4 py-2 pr-3"> <?php the_title();?> </h2>
                </div>
                <div class="page-content">
                    <?php the_content();?>
                </div>
            </div>
        <?php }
    }
?>

<?php get_footer(); ?>