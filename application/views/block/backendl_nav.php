
<!--  组管理员头部-->

<ul class="nav navbar-nav">
    <li class="home <?php if (Request::$current->controller() == 'Index'):?>active<?php endif;?>" ><a href="<?php e::url('leader');?>"><?php echo(__('top_backend.dashboard')); ?></a></li>
    <li <?php if (Request::$current->controller() == 'Problem'):?>class="active" <?php endif;?>><a href="<?php e::url('leader/problem');?>"><?php echo(__('top_backend.problem')); ?></a></li>
    <li <?php if (Request::$current->controller() == 'User'):?>class="active" <?php endif;?>><a href="<?php e::url('leader/user');?>"><?php echo(__('top_backend.user')); ?></a></li>
    <li <?php if (Request::$current->controller() == 'Contest'):?>class="active" <?php endif;?>><a href="<?php e::url('leader/contest');?>"><?php echo(__('top_backend.contest')); ?></a></li>
    <li <?php if (Request::$current->controller() == 'News'):?>class="active" <?php endif;?>><a href="<?php e::url('leader/news');?>"><?php echo(__('top_backend.news')); ?></a></li>
    <li <?php if (Request::$current->controller() == 'Setting'):?>class="active" <?php endif;?>><a href="<?php e::url('leader/setting');?>"><?php echo(__('top_backend.configure')); ?></a></li>
    <li <?php if (Request::$current->controller() == 'Groups'):?>class="active" <?php endif;?>><a href="<?php e::url('/leader/groups/list');?>"><?php echo(__('top_backend.group_configure')); ?></a></li>

</ul>
