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
                            <div class="stars">
                                <input  type="radio"  id="star5" wire:model="rate" value="5" /><label for="star5"></label>
                                <input  type="radio"  id="star4" wire:model="rate" value="4" /><label for="star4"></label>
                                <input  type="radio"  id="star3" wire:model="rate" value="3" /><label for="star3"></label>
                                <input  type="radio"  id="star2" wire:model="rate" value="2" /><label for="star2"></label>
                                <input  type="radio"  id="star1" wire:model="rate" value="1" /><label for="star1"></label>
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
