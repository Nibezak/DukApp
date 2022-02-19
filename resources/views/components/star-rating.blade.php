@auth
<x-appCss />
<form method="POST" action="/post/review">
    @csrf
    <input type="hidden" name="post" value="{{ $post->id }}">
<fieldset class="rating w-full  bg-transparent">
    <input type="radio" id="star5" name="rating" {{ $post->my_rating === 5 ? "checked='checked'" : "" }}
            value="{{5}}" onChange="this.form.submit()"/><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" {{ $post->my_rating === 4.5 ? "checked='checked'" : "" }}
            value="{{4.5}}" onChange="this.form.submit()"/><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" {{ $post->my_rating === 4 ? "checked='checked'" : "" }}
            value="{{4}}" onChange="this.form.submit()"/><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" {{ $post->my_rating === 3.5 ? "checked='checked'" : "" }}
            value="{{3.5}}" onChange="this.form.submit()"/><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" {{ $post->my_rating === 3 ? "checked='checked'" : "" }}
            value="{{3}}" onChange="this.form.submit()"/><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" {{ $post->my_rating === 2.5 ? "checked='checked'" : "" }}
            value="{{2.5}}" onChange="this.form.submit()"/><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" {{ $post->my_rating === 2 ? "checked='checked'" : "" }}
            value="{{2}}" onChange="this.form.submit()"/><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" {{ $post->my_rating === 1.5 ? "checked='checked'" : "" }}
            value="{{1.5}}" onChange="this.form.submit()"/><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" {{ $post->my_rating === 1 ? "checked='checked'" : "" }}
            value="{{1}}" onChange="this.form.submit()"/><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" {{ $post->my_rating === 0.5 ? "checked='checked'" : "" }}
            value="{{0.5}}" onChange="this.form.submit()"/><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>

</fieldset>
</form>
@endauth
