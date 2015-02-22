<tr{{ $content->parentId ? ' style="background-color: rgba(182, 182, 182, 0.' . $content->level . ');"' : '' }}>
    <td class="text-left"{{ $content->parentId ? ' style="padding-left: ' . $content->level * 2 . '0px;"' : '' }}>
        <?php $activeTranslation = $content->translation($lang->code); ?>
        <?php $activeRoute = $content->routeTranslation($lang->code); ?>
        @if($activeTranslation)
            <a href="{{ $activeRoute->url }}"> {{ $activeTranslation->title }}</a>
        @else
            <p>@lang('common.noTranslation')</p>
        @endif
    </td>
    <td>
        <i class="glyphicon glyphicon-{{ $content->isActive ? 'ok' : 'remove' }}-circle"></i>
    </td>
    <td>
        {{ $content->weight }}
    </td>
    <td>
        {{ $content->authorName() }}
    </td>
    <td class="text-left">
        {{ $content->path }}
    </td>
    <td>
        {{ $content->type }}
    </td>
</tr>
@each('test.treeNode', $content->children, 'content')

