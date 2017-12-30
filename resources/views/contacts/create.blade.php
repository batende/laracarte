@extends('layouts.default',['title'=>'Contact']) 

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                <h2>Get In Touch</h2>
                <p>
                    <span class="text-muted">If you having trouble with this service, please 
                        <a href="mailto:your-account@helpful.io" data-helpful="laracarte" data-helpful-modal="on">ask for help</a>
                    </span>
                    <form action="" method="POST">
                            {{csrf_field()}}
                            <div class="form-group ">
                                    <label class="control-label">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" value="" required="required">
                                    
                                </div>
            
                                <div class="form-group ">
                                    <label class="control-label">Email</label>
                                    <input type="email" name="email" value="" class="form-control" required="required">
                                    
                                </div>
            
            
                                <div class="form-group ">
                                    <textarea class="form-control" name="message" rows="10" cols="10" required="required"></textarea>
                                    
                                </div>
            
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
                            </div>
                    </form>
                </p>
            </div>
        </div>
    </div>
@endsection