<?php
/**
 * @var \yii\base\View $this
 * @var \yii\debug\Panel[] $panels
 * @var string $tag
 */
use yii\helpers\Html;
?>
<style>
#yii-debug-toolbar {
	position: fixed;
	left: 0;
	right: 0;
	bottom: 0;
	margin: 0;
	padding: 0;
	z-index: 1000000;
	font: 11px Verdana, Arial, sans-serif;
	text-align: left;
	height: 38px;
	border-top: 1px solid #ccc;
	background: rgb(237,237,237);
	background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2VkZWRlZCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjUzJSIgc3RvcC1jb2xvcj0iI2Y2ZjZmNiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmZmZmYiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
	background: -moz-linear-gradient(top,  rgba(237,237,237,1) 0%, rgba(246,246,246,1) 53%, rgba(255,255,255,1) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(237,237,237,1)), color-stop(53%,rgba(246,246,246,1)), color-stop(100%,rgba(255,255,255,1)));
	background: -webkit-linear-gradient(top,  rgba(237,237,237,1) 0%,rgba(246,246,246,1) 53%,rgba(255,255,255,1) 100%);
	background: -o-linear-gradient(top,  rgba(237,237,237,1) 0%,rgba(246,246,246,1) 53%,rgba(255,255,255,1) 100%);
	background: -ms-linear-gradient(top,  rgba(237,237,237,1) 0%,rgba(246,246,246,1) 53%,rgba(255,255,255,1) 100%);
	background: linear-gradient(to bottom,  rgba(237,237,237,1) 0%,rgba(246,246,246,1) 53%,rgba(255,255,255,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ededed', endColorstr='#ffffff',GradientType=0 );
}

.yii-debug-toolbar-block {
	float: left;
	margin: 0;
	border-right: 1px solid #e4e4e4;
	padding: 4px 8px;
	line-height: 32px;
}

.yii-debug-toolbar-block a {
	text-decoration: none;
	color: black !important;
}

.yii-debug-toolbar-block span {
}

.yii-debug-toolbar-block img {
	vertical-align: middle;
}
</style>

<div id="yii-debug-toolbar">
	<?php foreach ($panels as $panel): ?>
	<?php echo $panel->getSummary(); ?>
	<?php endforeach; ?>
</div>
