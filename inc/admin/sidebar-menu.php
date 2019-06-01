<ul class="sidebar-menu" data-widget="tree" style="display: none;" v-for="L1Row of menu" :key="L1Row.name">
    <li class="header">{{L1Row.title}}</li>
    <li class="treeview" v-bind:class="[(L2Row.name === pathparts[2]) ? 'active' : '']" v-for="L2Row of L1Row.child" :key="L2Row.name">
        <a href="javascript:void(0)">
            <i class="fa" v-bind:class="'fa-' + [L2Row.fa ? L2Row.fa : '']"></i>
            <span>{{L2Row.title}}</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li v-bind:class="[(L2Row.name === pathparts[2] && L3Row.name === pathparts[3]) ? 'active' : '']" v-for="L3Row of L2Row.child" :key="L3Row.name">
                <a :href="('/'+L1Row.name+'/'+L2Row.name+'-'+L3Row.name+'<?php echo $PageFileExt;?>')"><i class="fa fa-circle-o"></i> {{L3Row.title}}</a>
            </li>
        </ul>
    </li>
</ul>
