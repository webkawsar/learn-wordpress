<?php


if (!function_exists('emp_list')) {
    function emp_list_callback($atts = [], $content = null, $tag = '')
    {

        $modified_atts = array_change_key_case((array) $atts, CASE_LOWER);

        $wporg_atts = shortcode_atts(
            array(
                'title' => 'kawsar.com',
                'class' => 'default_class'
            ),
            $modified_atts,
            $tag
        );

        // return "This is desktop product details from shortCode";
        ob_start();
        ?>

        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td,
            th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>

        <h2 class="<?php echo $wporg_atts['class']; ?>"><?php echo $wporg_atts['title']; ?></h2>

        <table>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Title</th>
            </tr>

            <?php
            $query = new WP_Query(array(
                "post_type" => "emp",
            ));

            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();

                    ?>
                    <tr>
                        <td><?php the_title(); ?></td>
                        <td><?php the_content(); ?></td>
                        <td><?php the_title(); ?></td>
                    </tr>
                    <?php
                endwhile;
            else:
                _e("EMP not found", "myTranslateId");
            endif;
            ?>

        </table>

        <?php

        return ob_get_clean();
    }

    function emp_list()
    {
        add_shortcode('emp_list_all', 'emp_list_callback');
    }
}

add_action("init", 'emp_list');
