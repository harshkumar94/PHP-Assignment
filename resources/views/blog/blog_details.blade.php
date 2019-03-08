<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1 style="text-align:center">Blog Details</h1>
<h3 class="text-primary">{{$blog->title}}</h3>
{{$blog->description}}

<form method="POST" action="/blogs/{{$blog->id}}/comments">
@csrf
    <div class="form-group mt-5">
        <label for="exampleInputName1">Name</label>
        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
    </div>
    <div class="form-group">
        <label for="exampleInputDescription1">Comment</label>
            <textarea class="form-control"
                    id="exampleFormControlDescription1"
                    rows="4"
                    name="usercomment"
                    placeholder="Comment"
                    >
            </textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-4">Submit Comment</button>
    <h3 class="text-info">Comments</h3>
    @foreach($comments as $comment)
    <h5><b>{{$comment->name}}</b></h5>
    <p>{{$comment->usercomment}}</p>
    <hr class="border-primary">
    @endforeach
</form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</div>
</body>
</html>

