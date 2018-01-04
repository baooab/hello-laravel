@if (count($feed_items) > 0)
  <ol class="statuses">
    @foreach ($feed_items as $status)
      @include('statuses._status', ['user' => $status->user])
    @endforeach
    {!! $feed_items->links() !!}
  </ol>
@endif
