<template>
    <div class="panel-group" id="accordion_1">
        <div class="panel panel-default">
            <div class="panel-heading" id="headingOne">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="false">
                    Caracteristicas
                    </a>
                    <span class="pull-right"><img src="images/icons/location-2.png" alt=""></span>
                </h4>
            </div>
            <div id="collapseOne_1" class="panel-collapse collapse collapse" >
                <div class="panel-body">
                    Lorem
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" id="headingFour">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_4" aria-expanded="false">
                    Zona Geografica
                    </a>
                    <span class="pull-right"><img src="images/icons/location-2.png" alt=""></span>
                </h4>
            </div>
            <div id="collapseOne_4" class="panel-collapse collapse collapse" >
                <div class="panel-body">
                    Lorem
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_1" aria-expanded="false">
                    Los mas Rankeados
                    </a>
                    <span class="pull-right"><img src="images/icons/location-2.png" alt=""></span>
                </h4>
            </div>
            <div id="collapseTwo_1" class="panel-collapse collapse">
                <div class="panel-body">
                lorem
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" id="headingThree">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThree_1" aria-expanded="false">
                    Por Uso del Suelo
                    </a>
                    <span class="pull-right"><img src="images/icons/location-2.png" alt=""></span>
                </h4>
            </div>
            <div id="collapseThree_1" class="panel-collapse collapse"  aria-labelledby="headingThree">
                <div class="panel-body">
                Lorem
                </div>
            </div>
        </div>
    </div> 
</template>
<script>
export default {
    props:['filters']
}
</script>
