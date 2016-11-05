<div class="dashboard-widget row">
    <form role="form" action="<?php e::url('/leader/index/rejudge');?>" method="post" class="form-horizontal col-sm-4">
    <fieldset>
        <legend><?php echo(__('leader.index.index.configure')); ?></legend>
        <div class="form-group">
            <label class="control-label col-sm-6" for="stagenum"><?php echo(__('leader.index.index.stagenum')); ?></label>
            <div class="col-sm-6">
                <select class="form-control" name="stagenum" id="stagenum">
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-6" for="typeid"><?php echo(__('admin.index.index.id')); ?></label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="typeid" id="typeid"/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-6 col-sm-8">
                <button type="submit" class="btn btn-primary"><?php echo(__('admin.index.index.submit')); ?></button>
            </div>
        </div>
    </fieldset>
    </form>


    
</div>
