<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container mt-5">
        <div class="row col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1>Add New Post</h1>
                </div>
                <div class="panel-body">
                    <form class= "row g-3">
                        <div class="form-group">
                            <label for="jobName" class="form-label">Job Name*</label>
                            <input type="text" class="form-control" id="jobName">
                        </div>
                        <div class="form-group">
                            <label for="recruiterName" class="form-label">Recruiter Name*</label>
                            <input type="text" class="form-control" id="recruiterName">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Contact Email*</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="description" class="form-label">Job Description</label>
                            <textarea class="form-control" id="description"  rows="10"></textarea>
                        </div>
                        <div class="col-md-14">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>               
            </div>
        </div>   
    </div>
</body>
</html>