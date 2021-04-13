<div class="content-wrapper">
    <section class="content-header">
        <h1> Answer</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Answer</a></li>
            <li class="active">Answering</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <form role="form" id="BlogForm" method="post" class="form-horizontal">
                        <div class="box-group" id="accordion">
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed"> Question detail </a> </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <div class="col-sm-3">Name</div>
                                            <div class="col-sm-9">
                                                <?php echo $result->name;?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3">Age</div>
                                            <div class="col-sm-9">
                                                <?php echo $result->age;?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3">IsPublic</div>
                                            <div class="col-sm-9">
                                                <?php echo $result->ispublic;?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3 bold">Marital Status</div>
                                            <div class="col-sm-9">
                                                <?php echo $result->marital_status;?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3">Question</div>
                                            <div class="col-sm-9">
                                                <p>
                                                    <?php echo $result->question;?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-danger">
                                <div class="box-header with-border">
                                    <h4 class="box-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="" aria-expanded="true"> Answer </a> </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse in" aria-expanded="true">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <div class="col-sm-3">Answer</div>
                                            <div class="col-sm-9">
                                                <textarea class="form-control ckeditor" name="answer" id="answer" rows="3" placeholder="Enter ...">
                                                    <?php echo htmlspecialchars_decode($result->answer);?>
                                                </textarea>
                                                <input type="hidden" name="answer_text" id="answer_text">
                                                <input type="hidden" name="id" id="id" value="<?php echo $result->id;?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 text-center">
                                            <button class="btn btn-success answerclick"> Answer</button>
                                            <button class="btn btn-primary" style="margin-left: 5px;" id="back"> Back</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>