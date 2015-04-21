<?
function navlink($url, $text, $icon) 
{
  if (Request::path()==$url) {$selected=' class="active"';} else {$selected='';}
  if (isset($icon)) {$iicon="<i class='fa $icon'></i> ";} else {$iicon='';}
  return "<li$selected>".Html::anchor($url, $iicon.$text)."<li>";
}
?>

<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">

    <li class="active"><a href="/home"><i class="fa fa-desktop"></i> Dashboard <span class="sr-only">(current)</span></a></li>
    <li><a href="home"><i class="fa icon-doc"></i> Reports</a></li>
    <li><a href="#"><i class="fa icon-graph"></i> Analytics</a></li>
    <li><a href="#"><i class="fa icon-share-alt"></i> Export</a></li>
  </ul>
  <ul class="nav nav-sidebar">
    <li class="header">Real Estate</li>
    {!!navlink('admin/properties','Properties', 'icon-home')!!}
    {!!navlink('admin/properties/create','Add Property', 'icon-note')!!}
    <li>&nbsp;</li>
    {!!navlink('admin/property_agents','Agents', 'icon-user')!!}
    {!!navlink('admin/property_agents/create','Add Agent', 'icon-user-follow')!!}
    <li>&nbsp;</li>
    {!!navlink('admin/property_inquiries','Inquiries', 'fa-comment-o')!!}
    {!!navlink('admin/property_photos','Photos', 'icon-picture')!!}
    {!!navlink('admin/property_types','Types', 'icon-list')!!}
    {!!navlink('admin/property_inquiry_types','Inquiry Types', 'icon-list')!!}
    {!!navlink('admin/property_features','Features', 'icon-check')!!}
    {!!navlink('admin/property_sale_types','Sale Types', 'icon-wallet')!!}



  </ul>

  <ul class="nav nav-sidebar">
    <li class="header">System</li>
    <li><a href="{{ url('admin/settings') }}"><i class="fa icon-settings"></i> Settings</a></li>
    <li><a href="{{ url('auth/logout') }}"><i class="fa icon-logout"></i> Logout</a></li>

  </ul>
</div>