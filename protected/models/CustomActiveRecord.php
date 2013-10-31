<?php
/**
 * This is a Custom Class extended from CActiveRecord
 * All the Models are extended from this Custom Class
 */
 
class CustomActiveRecord extends CActiveRecord
{
	protected function beforeValidate() {
	
		parent::beforeValidate();
		
		if($this->isNewRecord) {
			if($this->hasAttribute('status_id'))
				$this->status_id = 1;
			
			if($this->hasAttribute('created'))
				$this->created = date('Y-m-d H:i:s');
				
			if($this->hasAttribute('created_by'))
				$this->created_by = Yii::app()->user->id;
		}
		
		if($this->hasAttribute('phone'))
			if($this->phone == 0)
				$this->phone = NULL;
		
		if($this->hasAttribute('mobile'))
			if($this->mobile == 0)
				$this->mobile = NULL;
		
		return true;
	}
	
	protected function beforeSave() {
		
		parent::beforeSave();
		
		if(!$this->isNewRecord) {
			if($this->hasAttribute('modified'))
				$this->modified = date('Y-m-d H:i:s');
			
			if($this->hasAttribute('modified_by'))
				$this->modified_by = Yii::app()->user->id;	
		}
		
		return true;
	}
}
?>