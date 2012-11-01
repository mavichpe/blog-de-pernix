<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div>

    <h1 class="widget-title">Blogs</h1>

    <ul>
        <?php
        $adminUser = $wpdb->get_results("SELECT * FROM wp_users where user_login = 'admin'");
        $adminUser = array_shift($adminUser);
        $homeBlog = get_blogs_of_user($adminUser->ID);
        $homeBlog = array_shift($homeBlog);
        ?>
        <li>
            <a href=" <? echo $homeBlog->path; ?>">
                <? echo $adminUser->display_name; ?>
            </a>
        </li>

        <?php
        $users = $wpdb->get_results("SELECT * FROM wp_users order by display_name");

        foreach ($users as $user) {
            if ($user->ID != $adminUser->ID) {
                $userBlog = get_blogs_of_user($user->ID);
                $userBlog = array_shift($userBlog);
                ?>
                <li>
                    <a href=" <? echo $userBlog->path; ?>">
                        <? echo $user->display_name; ?>
                    </a>
                </li>

                <?
            }
        }
        ?>
    </ul>

</div>