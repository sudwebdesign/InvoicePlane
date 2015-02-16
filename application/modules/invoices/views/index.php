<div class="headerbar">

    <h1><?php echo lang('invoices'); ?></h1>

    <div class="pull-right">
        <button type="button" class="btn btn-default btn-sm submenu-toggle hidden-lg"
                data-toggle="collapse" data-target="#ip-submenu-collapse" >
            <i class="fa fa-bars"></i> <?php echo lang('submenu'); ?>
        </button>
        <a class="create-invoice btn btn-sm btn-primary" href="#">
            <i class="fa fa-plus"></i> <?php echo lang('new'); ?>
        </a>
    </div>

    <div class="pull-right">
        <?php echo pager(site_url('invoices/status/' . $this->uri->segment(3)), 'mdl_invoices'); ?>
    </div>

    <div class="pull-right hidden-xs">

        <ul class="nav nav-pills index-options">
            <li <?php if ($status == 'all') { ?>class="active"<?php } ?>><a href="<?php echo site_url('invoices/status/all'); ?>"><?php echo lang('all'); ?></a></li>
            <li <?php if ($status == 'draft') { ?>class="active"<?php } ?>><a href="<?php echo site_url('invoices/status/draft'); ?>"><?php echo lang('draft'); ?></a></li>
            <li <?php if ($status == 'sent') { ?>class="active"<?php } ?>><a href="<?php echo site_url('invoices/status/sent'); ?>"><?php echo lang('sent'); ?></a></li>
            <li <?php if ($status == 'viewed') { ?>class="active"<?php } ?>><a href="<?php echo site_url('invoices/status/viewed'); ?>"><?php echo lang('viewed'); ?></a></li>
            <li <?php if ($status == 'paid') { ?>class="active"<?php } ?>><a href="<?php echo site_url('invoices/status/paid'); ?>"><?php echo lang('paid'); ?></a></li>
            <li <?php if ($status == 'overdue') { ?>class="active"<?php } ?>><a href="<?php echo site_url('invoices/status/overdue'); ?>"><?php echo lang('overdue'); ?></a></li>
        </ul>
    </div>

    <div class="pull-left hidden-sm hidden-md hidden-lg btn-group">
        <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#" >
            <?php #echo lang('options');<i class="fa fa-bars"></i> ?> <i class="fa fa-chevron-down"></i>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li <?php if ($status == 'all') { ?>class="active"<?php } ?>><a href="<?php echo site_url('invoices/status/all'); ?>"><?php echo lang('all'); ?></a></li>
            <li <?php if ($status == 'draft') { ?>class="active"<?php } ?>><a href="<?php echo site_url('invoices/status/draft'); ?>"><?php echo lang('draft'); ?></a></li>
            <li <?php if ($status == 'sent') { ?>class="active"<?php } ?>><a href="<?php echo site_url('invoices/status/sent'); ?>"><?php echo lang('sent'); ?></a></li>
            <li <?php if ($status == 'viewed') { ?>class="active"<?php } ?>><a href="<?php echo site_url('invoices/status/viewed'); ?>"><?php echo lang('viewed'); ?></a></li>
            <li <?php if ($status == 'paid') { ?>class="active"<?php } ?>><a href="<?php echo site_url('invoices/status/paid'); ?>"><?php echo lang('paid'); ?></a></li>
            <li <?php if ($status == 'overdue') { ?>class="active"<?php } ?>><a href="<?php echo site_url('invoices/status/overdue'); ?>"><?php echo lang('overdue'); ?></a></li>
        </ul>
    </div>

</div>

<div class="table-content">

    <div id="filter_results">
        <?php $this->layout->load_view('invoices/partial_invoice_table', array('invoices' => $invoices)); ?>
    </div>

</div>
