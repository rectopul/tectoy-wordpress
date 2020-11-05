<?php

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function my_custom_dashboard_widgets()
{
    global $wp_meta_boxes;

    wp_add_dashboard_widget('custom_help_widget', 'Resumo de votos dos vídeos', 'custom_dashboard_help');
}

function custom_dashboard_help()
{
    echo '<p>Bem vindo ao sistema de votos da volker, neste painel você pode acompanhar as votações dos vídeos</a></p>';

    $args = array(
        'public'                => true,
        'exclude_from_search'   => false,
        '_builtin'              => false
    );

    //Args
    $params = [
        'post_type' => 'video',
        'post_status' => 'publish',
        'meta_key' => 'votes_count',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
        'posts_per_page' => -1,
    ];

    // The Query
    $the_query = new WP_Query($params);

    echo '<ul class="community-events">';
    // The Loop
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();

            //var_dump(get_post_meta(get_the_ID(), "voted_user"));
            $userVotes = get_post_meta(get_the_ID(), "voted_user");

            $userVotesList = '<ul>';

            foreach ($userVotes[0] as $mail => $vote) {
                $timeZone = 'America/Sao_Paulo';

                $date;
                //$vote['date']->setTimezone($timeZone);
                if ($vote['date']) {
                    $date = $vote['date'];
                    $date = $date->format('d/m/Y H:i:sP');
                }


                $userVotesList .= sprintf(
                    '
                        <li>
                            <strong>E-mail:</strong> %s
                            <strong>Votos:</strong> %s
                            <span>
                                <strong>Data do último voto: </strong> %s
                            </span>
                        </li>
                    ',
                    $mail,
                    $vote['vote'],
                    $date
                );
            }

            $userVotesList .= '</ul>';


            if (get_post_meta(get_the_ID(), "votes_count", true) > 0) {
                printf(
                    '<li class="event event-wordcamp wp-clearfix widget__video--item">
                        <div class="event-info">
                            <div class="dashicons dashicons-format-video"></div>
                            <div class="event-info-inner">
                                <a class="event-title" href="%s">%s</a>
                            </div>
                            <span class="event-city widget__video--votes">
                                Votos: <strong> %s</strong>
                            </span>
                            <div class="widget__video--subscribers">
                                %s
                            </div>
                        </div>
                    </li>',
                    get_permalink(),
                    get_the_title(),
                    get_post_meta(get_the_ID(), "votes_count", true),
                    $userVotesList
                );
            }
        }
    } else {
        echo 'nenhum vídeo foi votado';
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    echo '</ul>';
}
