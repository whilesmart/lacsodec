<x-layouts.app>
    <div class="regsiter-cso-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                Create event
            @endslot
        @endcomponent

        <div class="con">
            <section>
                <form action="{{ route('store-event') }}" class="create-cso-form" method="POST">
                    @csrf
                    <div class="form-section">
                        <div class="flex">
                            <div class="field">
                                <label for="">Name</label>
                                <input type="text" name="name" id="name" placeholder="Enter event name"
                                    value="{{ old('name') }}" required>
                                    @error('name')
                                        <span>{{$message}}</span>
                                    @enderror
                            </div>
                            <div class="field">
                            <label for="">Event type</label>
                                <select name="type" id="type" value="{{ old('type') }}" required>
                                    <option value="event">Event</option>
                                    <option value="training">Training</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex">
                        <div class="field">
                                <label for="">Entrance</label>
                                <select name="entrance" id="entrance" value="{{ old('entrance') }}" required>
                                    <option value="free">Free</option>
                                    <option value="paid">Paid</option>
                                    <option value="sponsored">Sponsored</option>
                                </select>
                            </div>
                            <div class="field">
                            <label for="">Event link</label>
                                <input type="url" name="url" id="url"
                                    placeholder="Enter a link to the events page/site" value="{{ old('url') }}" required>
                                    @error('url')
                                        <span>{{$message}}</span>
                                @enderror
                            </div>
                            
                        </div>
                        <div class="flex">
                        <div class="field">
                                <label for="">Event date</label>
                                <input type="date" name="date" id="date"
                                    placeholder="" value="{{ old('date') }}" required>
                                    @error('date')
                                        <span>{{$message}}</span>
                                    @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <button type="submit" class="custom-button primary">Submit event</button>
                    </div>
                </form>
            </section>
        </div>

    </div>
</x-layouts.app>
