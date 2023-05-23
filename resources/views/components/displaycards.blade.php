<div class="card col-4" >
    <img class="card-img-top" src="images/a.jpg" alt="Title">
    <div class="card-body">
        <h4 class="card-title">{{$title}}</h4>
        <p {{$attributes}} >Text
           
        </p>
        <h4 {{$attributes->merge(['class'=>'bg-warning'])}}>{{$demo}}</h4>
    </div>
</div>