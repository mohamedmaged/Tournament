@include('layouts.header')

<div class="container">
        <h1>Rank</h1>
    <div class="wrapper">
        <table class="table ">
            <thead>
            <tr>
                <th scope="col">Position</th>
                <th scope="col">Team</th>
                <th scope="col">Played</th>
                <th scope="col">Won</th>
                <th scope="col">Drawn</th>
                <th scope="col">Lost</th>
                <th scope="col">Points</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teams as $i=>$team)
            <tr>
                <td scope="row" class="rank">{{$i+1}}</td>
                <td class="team">{{$team->name}}</td>
                <td class="points">{{$team->played}}</td>
                <td class="points">{{$team->won}}</td>
                <td class="points">{{$team->drawn}}</td>
                <td class="points">{{$team->lost}}</td>
                <td class="points">{{$team->points}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('layouts.footer')