<form id="form" name="form" class="form-inline" method="POST" action="{{route('filtered')}}">
    @csrf
    @csrf
    <div class="form-group">
        <label for="startDate">Start Date</label>
        <input id="startDate" name="startDate" type="text" class="form-control" />
        &nbsp;
        <label for="endDate">End Date</label>
        <input id="endDate" name="endDate" type="text" class="form-control" />
        <button type="submit" >Go</button>

    </div>
</form>



