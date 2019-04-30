<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3>Add Product</h3>
        
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form method="POST" action="{{url('store')}}" accept-charset="UTF-8" data-parsley-validate=""
                   enctype="multipart/form-data"><input name="_token" type="hidden"
                        value="HtdQPe4dhyZpO3OqhWKu6lF8We9Ocs6QoxnjtNHS">
                        @csrf 
        
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" required="" minlength="5" name="name" type="text" id="name">
                    </div>
        
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" name="description" type="text" id="description">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input class="form-control" name="price" type="text" id="price">
                    </div>
        
                    <div class="form-group">
                        <label for="size">Size</label>
                        <select class="form-control" id="size" name="size">
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                        </select>
                    </div>
        
                    <div class="form-group">
                        <label for="category_id">Categories</label>
                        <select class="form-control" id="category_id" name="category_id" >
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        </select>
                    </div>
        
                    
        
                    <input class="btn btn-default" type="submit" value="Create">
                </form>
        
            </div>
        </div>
    </div>
</body>
</html>