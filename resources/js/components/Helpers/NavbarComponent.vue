<template>
	<nav>
		<div class="nav-wrapper">
			<router-link :to="{name: 'Index'}" v-if="$route.name != 'Index' ">Que Proponen</router-link>
			<ul class="right hide-on-med-and-up">
				<!-- Dropdown Trigger -->
				<li><a class='dropdown-trigger' href='#' data-target='dropdown1'><i class="material-icons">menu</i></a></li>
				<!-- Dropdown Structure -->
				<ul id='dropdown1' class='dropdown-content'>
					<li><router-link :to="{name:'What'}">¿Qué es?</router-link></li>
					<li><router-link :to="{name:'Team'}">¿Quiénes Somos?</router-link></li>
					<li><router-link :to="{name:'Padron'}">¿Dónde Voto?</router-link></li>
					<li><a target="_blank" href="https://twitter.com/queproponen">
						Seguinos en Twitter
					</a></li>
				</ul>
			</ul>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><router-link :to="{name:'What'}">¿Qué es?</router-link></li>
				<li><router-link :to="{name:'Team'}">¿Quiénes Somos?</router-link></li>
				<li><router-link :to="{name:'Padron'}">¿Dónde Voto?</router-link></li>
				<li><a class="valign-wrapper" target="_blank" style="height:60px " href="https://twitter.com/queproponen">
					<img class="img-responsive circle" src="https://image.flaticon.com/icons/svg/54/54300.svg" style="width: 30px">
					</a></li>
<!--				<li><a src="https://twitter.com/queproponen"><img class="img-responsive circle" src="http://cdn.onlinewebfonts.com/svg/img_503922.png" style="width: 30px"></a></li>-->
			</ul>
		</div>
	</nav>
</template>

<script>
	export default {
		name: "NavbarComponent",
		mounted(){
			let elems = document.querySelectorAll('.dropdown-trigger');
			let instances = this.$M.Dropdown.init(elems);
		}
	}
</script>

<style scoped>
.nav-wrapper{
	width: 90%;
	margin: auto;
}
</style>