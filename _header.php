<?php
function makeMenu(array $menus, string $current): string
{
	$html = "";
	foreach ($menus as $menu) {
		$html .= "<li ";
		$html .= $menu['page'] === $current ? " class='active'" : "";
		$html .= "><a href='". $menu['page'] ."'>" . $menu['title'] . "</a></li>";
	}
	return $html . "";
}
$menus = [
	["page" => "/index.php", "title" => "Home"],
	["page" => "/convert-kelvin.php", "title" => "Convertisseur Kelvin/Farhenheit"],
];
?>
<header>
	<nav role="navigation">
	<div id="menuToggle">
		<input type="checkbox" />
		<span></span>
		<span></span>
		<span></span>
	<ul id="menu">
		<?php echo makeMenu($menus, $_SERVER['PHP_SELF'])?>
	</ul>
	</div>
	</nav>
</header>
