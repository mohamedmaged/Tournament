@include('layouts.header')


<div class="container">
    <h1 class="mt-5">Add a match </h1>

    <form method="post" action="{{route('match.store')}}">
        {{csrf_field()}}
        <div class="form-group row" >
            <div class="col-sm-4">
            <select name="team_a_id" class="form-control mx-auto text-center" id="team_a" required>
                @foreach($teams as $i=>$team)
                <option value="{{$team->id}}">{{$team->name}}</option>
                @endforeach
            </select>
            @if ($errors->has('team_a_id'))
                <span class="help-block">
                            <strong style="color: red" style="color: red">{{ $errors->first('team_a_id') }}</strong>
                        </span>
            @endif
                <input type="number" name="team_a_score" id="team_a_score"class="form-control mt-3" required>
                @if ($errors->has('team_a_score'))
                    <span class="help-block">
                            <strong style="color: red" style="color: red">{{ $errors->first('team_a_score') }}</strong>
                        </span>
                @endif

            </div>
                <div class="col-3  mx-auto text-center">
                    <h1 class="font-weight-bold" >VS</h1>
                </div>
            <div class="col-sm-4">
            <select name="team_b_id" class="form-control mx-auto text-center" id="team_b" required>
                @foreach($teams as $i=>$team)
                <option value="{{$team->id}}">{{$team->name}}</option>
                @endforeach
            </select>
            @if ($errors->has('team_b_id'))
                <span class="help-block">
                            <strong style="color: red" style="color: red">{{ $errors->first('team_b_id') }}</strong>
                        </span>
            @endif
            <input type="number" name="team_b_score" id="team_b_score"class="form-control mt-3" required>
            @if ($errors->has('team_b_score'))
                <span class="help-block">
                            <strong style="color: red" style="color: red">{{ $errors->first('team_b_score') }}</strong>
                        </span>
            @endif
            </div>
        </div>

        <div class="form-group row mt-5">
            <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>


@include('layouts.footer')