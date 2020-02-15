@include('layouts.header')

<div class="container">
    <h1 class="mt-5">Create Team</h1>

    <form method="post" action="{{route('team.store')}}">
        {{csrf_field()}}
        <div class="form-group" >
            <label for="name">TeamName</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Enter Team Name" required>

            @if ($errors->has('name'))
                <span class="help-block">
                            <strong style="color: red" style="color: red">{{ $errors->first('name') }}</strong>
                        </span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@include('layouts.footer')
