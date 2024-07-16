<h1>user Edit page</h2>
<p>This is Edit page with id</p>

<div class="row">
    <div class="co-6">
        <from action="{{ url('users', $id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" name="fullname" id="fullname" class="form-contrpl"/>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">submit</button>
            </div>
        </form>
    </div>
</div>

<from action="{{ url('users') }}" method="post">
    @csrf
    <input type="text" name="fullname"/>
    <input type="submit" value="submit"/>
    <input type="hidden" value="{{ $id }}"/>
</form>