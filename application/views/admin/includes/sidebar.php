<?php  

$dclass = $quclass = $category= $subcategory=$occupation=$investigation=$icon=$medicine=$potency=$industry=$dosage=$referby=$habits=$allergy=$exercise=$disease=$marital= $q_aclass = $q_anclass = $q_unclass = $uclass = $con_onclass = $con_peclass= $caseclass=$testimonialclass=$test_hand_class=$diagnosis_class=
$phy_exa_class=
$symptoms_class=$lifestyle_class='';
$conclass = $qclass = $masclass='class="treeview"';
$param3 = $this->uri->segment(3);

if($pagename == 'dashboard'){
	$dclass = 'class="active"';
}else if($pagename == 'users'){
	$uclass = 'class="active"';
}else if($pagename == 'qualification'){
  $quclass = 'class="active"';
  $masclass='class="active treeview"';
}else if($pagename == 'occupation'){
  $masclass='class="active treeview"';
  $occupation = 'class="active"';
}else if($pagename == 'marital'){
  $masclass='class="active treeview"';
  $marital = 'class="active"';
}else if($pagename == 'disease'){
  $masclass='class="active treeview"';
  $disease = 'class="active"';
}else if($pagename == 'habits'){
  $masclass='class="active treeview"';
  $habits = 'class="active"';
}else if($pagename == 'allergy'){
  $masclass='class="active treeview"';
  $allergy = 'class="active"';
}else if($pagename == 'exercise'){
  $masclass='class="active treeview"';
  $exercise = 'class="active"';
}else if($pagename == 'referby'){
  $masclass='class="active treeview"';
  $referby = 'class="active"';
}else if($pagename == 'medicine'){
  $masclass='class="active treeview"';
  $medicine = 'class="active"';
}else if($pagename == 'dosage'){
  $masclass='class="active treeview"';
  $dosage = 'class="active"';
}else if($pagename == 'industry'){
  $masclass='class="active treeview"';
  $industry = 'class="active"';
}else if($pagename == 'potency'){
  $masclass='class="active treeview"';
  $potency = 'class="active"';
}else if($pagename == 'investigation'){
  $masclass='class="active treeview"';
  $investigation = 'class="active"';
}else if($pagename == 'icon'){
  $masclass='class="active treeview"';
  $icon = 'class="active"';
}else if($pagename == 'category'){
  $masclass='class="active treeview"';
  $category = 'class="active"';
}else if($pagename == 'subcategory'){
  $masclass='class="active treeview"';
  $subcategory = 'class="active"';
}else if($pagename == 'questions'){
	$qclass = 'class="active treeview"';
	if($param3 == 'all'){
		$q_aclass = 'class="active"';
	}else if($param3 == 'answered'){
		$q_anclass = 'class="active"';
	}else if($param3 == 'unanswered'){
		$q_unclass = 'class="active"';
	}
}else if($pagename == 'consult'){
		$conclass = 'class="active treeview"';
	if($param3 == 'online'){
		$con_onclass = 'class="active"';
	}else if($param3 == 'personally'){
		$con_peclass = 'class="active"';
	}
}else if($pagename == 'case-study'){
  $masclass='class="active treeview"';
  $caseclass = 'class="active"';
}else if($pagename == 'testimonials'){
  $masclass='class="active treeview"';
  $testimonialclass = 'class="active"';
}else if($pagename == 'testimonials-handwritten'){
  $masclass='class="active treeview"';
  $test_hand_class = 'class="active"';
}else if($pagename == 'diagnosis'){
  $masclass='class="active treeview"';
  $diagnosis_class = 'class="active"';
}else if($pagename == 'physical-examination'){
  $masclass='class="active treeview"';
  $phy_exa_class = 'class="active"';
}else if($pagename == 'symptoms'){
  $masclass='class="active treeview"';
  $symptoms_class = 'class="active"';
}else if($pagename == 'lifestyle'){
  $masclass='class="active treeview"';
  $lifestyle_class='class="active"';
}
?>

 <section class="sidebar"> 
  <div class="user-panel">
    <div class="pull-left image"> <img src="<?= base_url();?>assets/img/user2-160x160.jpg" class="img-circle" alt="User Image"> </div>
    <div class="pull-left info"><p>Dr. Hitesh</p></div>
  </div>

  <ul class="sidebar-menu">
    <li <?= $dclass;?>><a href="<?= base_url();?>dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <li <?= $uclass;?>><a href="<?= base_url();?>dashboard/users"><i class="fa fa-users"></i> <span>Users</span></a></li>    
    <li <?= $uclass;?>><a href="<?= base_url();?>patient"><i class="fa fa-users"></i> <span>Patient</span></a></li>    
    <li <?= $conclass;?>> <a href="#"> <i class="fa fa-stethoscope"></i> <span>Consult</span> <i class="fa fa-angle-left pull-right"></i> </a>
      <ul class="treeview-menu">
        <li <?= $con_onclass;?>><a href="<?= base_url();?>admin/consult/online"><i class="fa fa-headphones"></i> Online</a></li>
        <li <?= $con_peclass;?>><a href="<?= base_url();?>admin/consult/personally"><i class="fa fa-user"></i> Personally</a></li>
      </ul>
    </li>
    <li <?= $qclass;?>> <a href="#"> <i class="fa fa-question-circle"></i> <span>Questions</span> <i class="fa fa-angle-left pull-right"></i> </a>
      <ul class="treeview-menu">
        <li <?= $q_aclass;?>><a href="<?= base_url();?>question/qlist/all"><i class="fa fa-plus-square-o"></i> All</a></li>
        <li <?= $q_anclass;?>><a href="<?= base_url();?>question/qlist/answered"><i class="fa fa-check-square-o"></i> Answered</a></li>
        <li <?= $q_unclass;?>><a href="<?= base_url();?>question/qlist/unanswered"><i class="fa fa-square-o"></i> Un Answered</a></li>
      </ul>
    </li>

    <li <?= $masclass;?>> <a href="#"> <i class="fa fa-database"></i> <span>Manange Masters</span> <i class="fa fa-angle-left pull-right"></i> </a>
      <ul class="treeview-menu">
       <li <?= $quclass;?>><a href="<?= base_url();?>qualification"><i class="fa fa-graduation-cap"></i> <span> Qualification</span></a></li>
      <li <?= $occupation;?>><a href="<?= base_url();?>occupation"><i class="fa fa-graduation-cap"></i> <span> Occupation</span></a></li>
      <li <?= $marital;?>><a href="<?= base_url();?>marital"><i class="fa fa-graduation-cap"></i> <span> Marital Status</span></a></li>
      <li <?= $disease;?>><a href="<?= base_url();?>disease"><i class="fa fa-graduation-cap"></i> <span> Disease</span></a></li>
      <li <?= $habits;?>><a href="<?= base_url();?>habits"><i class="fa fa-graduation-cap"></i> <span> Habits</span></a></li>
      <li <?= $allergy;?>><a href="<?= base_url();?>allergy"><i class="fa fa-graduation-cap"></i> <span> Allergy</span></a></li>
      <li <?= $exercise;?>><a href="<?= base_url();?>exercise"><i class="fa fa-graduation-cap"></i> <span> Exercise</span></a></li>
      <li <?= $medicine;?>><a href="<?= base_url();?>medicine"><i class="fa fa-graduation-cap"></i> <span> Medicine</span></a></li>
      <li <?= $dosage;?>><a href="<?= base_url();?>dosage"><i class="fa fa-graduation-cap"></i> <span> Dosage</span></a></li>
      <li <?= $industry;?>><a href="<?= base_url();?>industry"><i class="fa fa-graduation-cap"></i> <span> Industry</span></a></li>
      <li <?= $potency;?>><a href="<?= base_url();?>potency"><i class="fa fa-graduation-cap"></i> <span> Potency</span></a></li>
      <li <?= $investigation;?>><a href="<?= base_url();?>investigation"><i class="fa fa-graduation-cap"></i> <span> Investigation</span></a></li>
      <li <?= $icon;?>><a href="<?= base_url();?>icons"><i class="fa fa-graduation-cap"></i> <span> Icon</span></a></li>
      <!-- <li <?= $category;?>><a href="<?= base_url();?>category"><i class="fa fa-graduation-cap"></i> <span> Main Category</span></a></li> -->
      <!-- <li <?= $subcategory;?>><a href="<?= base_url();?>subcategory"><i class="fa fa-graduation-cap"></i> <span> Sub Category</span></a></li> -->
      <li <?= $referby;?>><a href="<?= base_url();?>referby"><i class="fa fa-graduation-cap"></i> <span> Referby</span></a></li>
      <li <?= $testimonialclass;?>><a href="<?= base_url();?>testimonials/create"><i class="fa fa-comment"></i> <span> Testimonial</span></a></li>
      <li <?= $test_hand_class;?>><a href="<?= base_url();?>testimonials/handwritten"><i class="fa fa-comment"></i> <span> Testimonial Handwritten</span></a></li>
      <li <?= $caseclass;?>><a href="<?= base_url();?>case-study/create"><i class="fa fa-comment"></i> <span> Case Study</span></a></li>
      <li <?= $diagnosis_class;?>><a href="<?= base_url();?>diagnosis"><i class="fa fa-comment"></i> <span> Diagnosis</span></a></li>
      <li <?= $phy_exa_class;?>><a href="<?= base_url();?>physical-examination"><i class="fa fa-comment"></i> <span> Physical Examination</span></a></li>
      <li <?= $symptoms_class;?>><a href="<?= base_url();?>symptoms"><i class="fa fa-comment"></i> <span> Symptoms </span></a></li>
      <li <?= $lifestyle_class;?>><a href="<?= base_url();?>lifestyle"><i class="fa fa-comment"></i> <span> Lifestyle </span></a></li>
    </ul>
  </li>
</ul>
</section>