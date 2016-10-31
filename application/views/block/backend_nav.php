<ul class="nav navbar-nav">
    <li class="home <?php if (Request::$current->controller() == 'Index'):?>active<?php endif;?>" ><a href="<?php e::url('admin');?>"><?php echo(__('top_backend.dashboard')); ?></a></li>
    <li <?php if (Request::$current->controller() == 'Problem'):?>class="active" <?php endif;?>><a href="<?php e::url('admin/problem');?>"><?php echo(__('top_backend.problem')); ?></a></li>
    <li <?php if (Request::$current->controller() == 'User'):?>class="active" <?php endif;?>><a href="<?php e::url('admin/user');?>"><?php echo(__('top_backend.user')); ?></a></li>
    <li <?php if (Request::$current->controller() == 'Contest'):?>class="active" <?php endif;?>><a href="<?php e::url('admin/contest');?>"><?php echo(__('top_backend.contest')); ?></a></li>
    <li <?php if (Request::$current->controller() == 'News'):?>class="active" <?php endif;?>><a href="<?php e::url('admin/news');?>"><?php echo(__('top_backend.news')); ?></a></li>
    <li <?php if (Request::$current->controller() == 'Setting'):?>class="active" <?php endif;?>><a href="<?php e::url('admin/setting');?>"><?php echo(__('top_backend.configure')); ?></a></li>
    <li <?php if (Request::$current->controller() == 'Groups'):?>class="active" <?php endif;?>><a href="<?php e::url('admin/groups/index');?>"><?php echo(__('groups')); ?></a></li>
     <li <?php if (Request::$current->controller() == 'Invite'):?>class="active" <?php endif;?>><a href="<?php e::url('/admin/Invite/index');?>"><?php echo(__("invitation_code")); ?></a></li>

<!--              <li <?php if (Request::$current->controller() == 'Situation' AND Request::$current->action() == 'list'):?>class="active" <?php endif;?>><a href="<?php e::url('/admin/situation/list');?>"><?php echo(__("situation")); ?></a></li>

        <li <?php if (Request::$current->controller() == 'user' AND Request::$current->action() == 'addscore'):?>class="active" <?php endif;?>><a href="<?php e::url('/admin/user/addscore?user=yibo&date=10');?>"><?php echo(__("situaInject")); ?></a></li> -->


        <li <?php if (Request::$current->controller() == 'user' AND Request::$current->action() == 'addscore'):?>class="active" <?php endif;?>><a href="<?php e::url('/admin/user/addscore?user=zhang&date=2016-09');?>"><?php echo(__("addscore")); ?></a></li>

        <li <?php if (Request::$current->controller() == 'user' AND Request::$current->action() == 'addscore'):?>class="active" <?php endif;?>><a href="<?php e::url('/admin/groups/status?id=stju&date=2016-10');?>"><?php echo(__("status")); ?></a></li>


</ul>