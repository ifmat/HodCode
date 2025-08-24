<?php
/**
 * Template Single Product – Final Version with Loop
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

do_action( 'woocommerce_before_main_content' );
?>

<?php while ( have_posts() ) : the_post(); ?>

    <?php
    global $product;

    if ( ! $product instanceof WC_Product ) {
        echo '<p>محصولی برای نمایش وجود ندارد.</p>';
        continue;
    }
    ?>

    <div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'container mx-auto my-10', $product ); ?>>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- گالری محصول + Sale Flash -->
            <div class="product-gallery relative">
                <?php
                if ( $product->is_on_sale() ) {
                    echo apply_filters(
                        'woocommerce_sale_flash',
                        '<span class="onsale bg-red-500 text-white px-2 py-1 rounded absolute top-2 left-2">' . esc_html__( 'Sale!', 'woocommerce' ) . '</span>',
                        get_post(),
                        $product
                    );
                }

                do_action( 'woocommerce_before_single_product_summary' );
                ?>
            </div>

            <!-- جزئیات محصول -->
            <div class="product-summary p-6 bg-white rounded-2xl shadow">
                <h1 class="text-3xl font-bold mb-4"><?php the_title(); ?></h1>

                <!-- قیمت و درصد تخفیف -->
                <div class="mb-4 flex items-center gap-4">
                    <div class="text-xl text-red-500">
                        <?php woocommerce_template_single_price(); ?>
                    </div>
                    <?php
                    $regular_price = (float) $product->get_regular_price();
                    $sale_price    = (float) $product->get_sale_price();
                    if ( $product->is_on_sale() && $regular_price > 0 ) :
                        $off_percent = round( 100 * ( ( $regular_price - $sale_price ) / $regular_price ) );
                        ?>
                        <span class="bg-red-500 text-white px-2 py-1 rounded text-sm">-<?php echo $off_percent; ?>%</span>
                    <?php endif; ?>
                </div>

                <div class="mb-6"><?php woocommerce_template_single_excerpt(); ?></div>

                <div class="mb-6"><?php woocommerce_template_single_add_to_cart(); ?></div>

                <div class="text-sm text-gray-500"><?php woocommerce_template_single_meta(); ?></div>
            </div>
        </div>

  

    </div>

<?php endwhile; ?>

<?php
do_action( 'woocommerce_after_main_content' );
get_footer( 'shop' );
?>
