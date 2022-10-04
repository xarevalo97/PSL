<?php 
class InstitucionesModel extends Mysql
{
	private $intId;
	private $strInstitucion;
	private $strFederacion;
	private $strDireccion;
	private $intGerente;
	private $strTelefono;
	private $strCorreo;
	
	public function __construct()
	{
		parent::__construct();
	}	

	public function insertInstituciones(string $strInstitucion, string $federacion, string $direccion, int $telefono, string $correo){

		$this->strInsti$strInstitucion = $strinstitucion;
		$this->strFederacion = $federacion;
		$this->strDireccion = $direccion;
		$this->intGerente = $gerente;
		$this->strTelefono = $telefono;
		$this->strCorreo = $correo;
		
		

		$return = 0;
		$sql = "SELECT * FROM instituciones WHERE 
				email_user = '{$this->strEmail}' or Insti$strInstitucion = '{$this->strInsti$strInstitucion}' ";
		$request = $this->select_all($sql);

		if(empty($request))
		{
			$query_insert  = "INSERT INTO institucion(id,federacion,direccion,gerente,telefono,correo) 
							  VALUES(?,?,?,?,?,?)";
        	$arrData = array($this->strId,
    						$this->strFederacion,
    						$this->strDireccion,
    						$this->intGerente,
    						$this->strTelefono,
    						$this->strCorreo,);
        	$request_insert = $this->insert($query_insert,$arrData);
        	$return = $request_insert;
		}else{
			$return = "exist";
		}
        return $return;
	}

	public function selectInstituciones()
	{
		$sql = "SELECT id,federacion,direccion,gerente,telefono,correo,status 
				FROM instituciones 
				WHERE rolid = 7 and status != 0 ";
		$request = $this->select_all($sql);
		return $request;
	}

	public function selectInstitucion(int $id){
		$this->intId = $id;
		$sql = "SELECT id,federacion,direccion,gerente,telefono,correo,status, DATE_FORMAT(datecreated, '%d-%m-%Y') as fechaRegistro 
				FROM instituciones
				WHERE idinstituciones = $this->intId and rolid = 7";
		$request = $this->select($sql);
		return $request;
	}

	public function updateInstitucion(int $id, string $institucion, string $federacion, string $direccion, int $telefono, string $correo){

		$this->strInsti$strInstitucion = $strinstitucion;
		$this->strFederacion = $federacion;
		$this->strDireccion = $direccion;
		$this->intGerente = $gerente;
		$this->strTelefono = $telefono;
		$this->strCorreo = $correo;

		$sql = "SELECT * FROM instituciones WHERE (email_user = '{$this->strEmail}' AND id != $this->intId)
									  OR (id = '{$this->strId}' AND idpersona != $this->intId) ";
		$request = $this->select_all($sql);

		if(empty($request))
		{
			if($this->strPassword  != "")
			{
				$sql = "UPDATE instituciones SET id=?, institucion=?, federaccion=?, direccion=?, gerente=?, telefono=?, correo=? 
						WHERE idinstituciones = $this->intId ";
				$arrData = array($this->strInsti$strInstitucion,
				$this->strFederacion,
				$this->strDireccion,
				$this->intGerente,
				$this->strTelefono,
				$this->strCorreo);
			}else{
				$sql = "UPDATE instituciones SET id=?, institucion=?, federaccion=?, direccion=?, gerente=?, telefono=?, correo=? ? 
						WHERE idinstituciones = $this->intId ";
				$arrData = array($this->strInsti$strInstitucion,
				$this->strFederacion,
				$this->strDireccion,
				$this->intGerente,
				$this->strTelefono,
				$this->strCorreo);
			}
			$request = $this->update($sql,$arrData);
		}else{
			$request = "exist";
		}
		return $request;
	}

	public function deleteInstitucion(int $intIdpersona)
	{
		$this->intId = $intIdpersona;
		$sql = "UPDATE institucin SET status = ? WHERE id = $this->intId ";
		$arrData = array(0);
		$request = $this->update($sql,$arrData);
		return $request;
	}
}

 ?>