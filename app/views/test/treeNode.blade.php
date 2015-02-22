<tr>
    <td {{$content->parentId ? 'style="padding-left: ' . $content->level * 2 . '0px"' : ''}}>
        <?php $activeTranslation = $content->translation($lang->code); ?>
        <?php $activeRoute = $content->routeTranslation($lang->code); ?>
        @if($activeTranslation)
            <a href="{{ $activeRoute->url }}">{{ $activeTranslation->title }}</a>
        @else
            <p>@lang('common.noTranslation')</p>
        @endif
    </td>
    <td class="text-center">
        <i class="glyphicon glyphicon-{{ $content->isActive ? 'ok' : 'remove' }}-circle"></i>
    </td>
    <td class="text-center">
        {{ $content->weight }}
    </td>
    <td class="text-center">
        {{ $content->authorName() }}
    </td>
    <td>
        {{ $content->path }}
    </td>
    <td class="text-center">
        {{ $content->type }}
    </td>
</tr>
@each('test.treeNode', $content->children, 'content')

