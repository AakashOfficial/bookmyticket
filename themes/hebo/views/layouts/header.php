<div class="container">
	<div class="row-fluid">

		<div class="span6">
			<!--<a href="" class="logo"></a>-->
			<span class="logo letterpress" id="logo">
				<h3><a href="">Book My Ticket<a></h3>
			</span>
		</div><!--/.span6 -->

		<div class="span6" id="member_area" style="text-align:right;">
			<?php
				if(Yii::app()->user->isGuest)
				{
					echo CHtml::link('Sign Up', Yii::app()->createUrl('signup'), array('class'=>'header_link','id'=>'u_signup'));
					echo "&nbsp;&nbsp;|&nbsp;&nbsp;";
					echo CHtml::link('Sign In',Yii::app()->createUrl('signin'), array('class'=>'header_link','id'=>'u_signin'));
				}
				else
				{
					$welcome_msg = Yii::app()->user->disp_name;
					$dashboard_lnk = (Yii::app()->user->login_type_id == 1) ? 'user/dashboard' : 'agent/dashboard';
					echo "Welcome! ";
					echo CHtml::link($welcome_msg, Yii::app()->createUrl($dashboard_lnk), array('class'=>'header_link','id'=>'my_account'));
				
					echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					$logout_lnk = (Yii::app()->user->login_type_id == 1) ? 'user/logout' : 'agent/logout';
					echo CHtml::link('Logout!', Yii::app()->createUrl($logout_lnk), array('class'=>'header_link','id'=>'logout'));
				}
			?>
			
		</div><!--/.span6 -->
		
	</div><!--/.row-fluid header -->
</div>
