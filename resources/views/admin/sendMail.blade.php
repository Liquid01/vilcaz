<div class="panel panel-default">
    <div class="panel-body message">
        <h2 class="text-center">Type your Message</h2>
        <form class="form-horizontal" role="form" method="post" action="{{route('postOneMail')}}">
            {{ csrf_field() }}
            @if(isset($userDetails) && sizeof($userDetails) > 0)
            <div class="form-group">
                <label for="to" class="col-sm-1 control-label">To:</label>
                <div class="col-sm-11">
                    <input type="email" class="form-control select2-offscreen" value="{{$userDetails->email}}" required name="to" id="to" placeholder="type Email" tabindex="-1">
                    <small><strong>{{$userDetails->name}}</strong></small>
                    <br>
                    <br>
                </div>

            </div>
            @else
            <div class="form-group">
                <label for="to" class="col-sm-1 control-label">To:</label>
                <div class="col-sm-11">
                    <input type="email" class="form-control select2-offscreen" required id="to" name="to"  placeholder="Enter Email" tabindex="-1">
                </div>
            </div>
            @endif
            <div class="form-group">
                <label for="cc" class="col-sm-1 control-label">Subject:</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control select2-offscreen" required id="subject" name="subject" placeholder="Enter Subject" tabindex="-1">
                </div>
            </div>

                <div class="col-sm-11 col-sm-offset-1">

                    <br>

                    <div class="form-group">
                        <textarea class="form-control" id="message" name="body" rows="12" placeholder="Click here to reply"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" onclick="submit();" class="btn m-b-5"><i class="material-icons right">send</i>Send</button>
                        {{--<button type="submit" class="btn btn-default m-b-5"><i class="material-icons right">attachment</i>Draft</button>--}}
                        <button type="reset" onclick="confirm('are you sure you want to discard this message?');" class="btn btn-danger m-b-5"><i class="material-icons right">do_not_disturb_alt</i>Discard</button>
                    </div>
                </div>
        </form>


    </div>
</div>