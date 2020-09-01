<main class="c-main">
    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <div class="fade-in">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Group</strong> Table
                                    <span class="search-toogle float-right" data-toggle="collapse" type="button" data-target="#collapseSearch" role="button" aria-expanded="false" aria-controls="collapseSearch">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="collapse" id="collapseSearch">
                                                <form action="" method="get">
                                                    <div class="input-group pb-3">
                                                        <input class="form-control" id="search" type="text" name="search" placeholder="Seach" required>
                                                        <span class="input-group-append">
                                                            <button class="btn btn-primary" type="submit">Search</button>
                                                        </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <?php $this->load->view($page_current . '/table') ?>
                                        </div>
                                    </div>

                                </div>
                                <!-- <div class="card-footer">
                                        insert pagination here
                                </div> -->
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header"><?php echo $form_title ?></div>
                                <div class="card-body">
                                    <?php $this->load->view($page_current . '/form') ?>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
<?php
if ($this->input->get('search') != null) {
?>
    <script>
        let collapseSearch = document.getElementById('collapseSearch');
        let searchInput = document.getElementById('search');

        collapseSearch.classList.add('show');
        search.value = '<?php echo $this->input->get('search') ?>';
    </script>
<?php
}
?>