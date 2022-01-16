<div style="display: inline;">
    <a wire:click="store({{ $product->id }})" class="text-green" data-toggle="tooltip" style="margin-right: 16px;" data-original-title="@lang('forum.like')">
        <i class="icon-like {{ config('other.font-awesome') }} fa-thumbs-up fa-2x @if(auth()->user()->likes()->where('product_id', '=', $product->id)->where('like', '=', 1)->first()) fa-beat @endif"></i>
        <span class="count" style="font-size: 20px;">{{ $product->likes()->count() }}</span>
    </a>
</div>
