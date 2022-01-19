
<div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
            <form class="review-form" wire:submit.prevent="store">
                @csrf
                <div class="container">


                    <div class="row">
                        <div class="col-md-12 form-group">
                            @error('rate')<span class="text-danger">{{$message}}</span>@enderror
                            <label for="rate">Your Rating:</label>
                            <br>
                            <div class="stars">
                                <input  class="star star-5" name="star"  type="radio"  id="star-5" wire:model="rate" value="5" />
                                <label class="star star-5" for="star-5" ></label>
                                <input class="star star-4" name="star" type="radio"  id="star-4" wire:model="rate" value="4" />
                                <label class="star star-4" for="star-4"></label>
                                <input class="star star-3" name="star" type="radio"  id="star-3" wire:model="rate" value="3" />
                                <label class="star star-3" for="star-3"></label>
                                <input  class="star star-2" name="star" type="radio"  id="star-2" wire:model="rate" value="2" />
                                <label class="star star-2" for="star-2"></label>
                                <input class="star star-1" name="star" type="radio"  id="star-1" wire:model="rate" value="1" />
                                <label class="star star-1" for="star-1"></label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label>Comment</label>
                            <br>
                            <textarea  wire:model="comment"  cols="50" rows="5" class="input"></textarea>
                            @error ('comment')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                            @auth
                            <input type="submit" value="save" class="btn btn-primary btn-lg px-5">
                            @else
                            <a href="/login" class="primary-btn">For Submit Your Comment, Please Login</a>
                            @endauth
                </div>
            </form>
</div>
