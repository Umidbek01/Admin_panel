<div id="sidebar" class="app-sidebar">

    <div class="app-sidebar-content" data-scrollbar="true"
         data-height="100%">

        <div class="menu">
            <div class="menu-header">Navigation</div>
            <div class="menu-item active">
                <a href="index.html" class="menu-link">
                    <span class="menu-icon"><i class="bi bi-cpu"></i></span>
                    <span class="menu-text">Home</span>
                </a>
            </div>
            <div class="menu-item">
                <a href="<?=\yii\helpers\Url::to(['/admin/user'])?>" class="menu-link">
                                <span class="menu-icon"><i class="bi
                                        bi-people"></i></span>
                    <span class="menu-text">Users</span>
                </a>
            </div>

            <div class="menu-item">
                <a href="<?=\yii\helpers\Url::to(['/admin/project-categories'])?>" class="menu-link">
                                <span class="menu-icon"><i class="bi
                                        bi-folder2-open"></i></span>
                    <span class="menu-text">Projects Categories</span>
                </a>
            </div>

            <div class="menu-item ">
                <a href="<?=\yii\helpers\Url::to(['/admin/projects'])?>" class="menu-link">
                                <span class="menu-icon"><i class="bi
                                        bi-folder2-open"></i></span>
                    <span class="menu-text">Projects</span>
                </a>
            </div>

            <div class="menu-item ">
                <a href="<?=\yii\helpers\Url::to(['/admin/skills'])?>" class="menu-link">
                                <span class="menu-icon"><i class="bi
                                        bi-folder2-open"></i></span>
                    <span class="menu-text">Skills</span>
                </a>
            </div>

            <div class="menu-item ">
                <a href="analytics.html" class="menu-link">
                                <span class="menu-icon"><i class="bi
                                        bi-gear"></i></span>
                    <span class="menu-text">Services</span>
                </a>
            </div>

        </div>
        <div class="p-3 px-4 mt-auto">
            <a href="documentation/index.html" target="_blank"
               class="btn d-block btn-outline-theme">
                <i class="fa fa-code-branch me-2 ms-n2 opacity-5"></i>
                Documentation
            </a>
        </div>
    </div>

</div>