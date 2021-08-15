<?php

namespace App\Modules\Landing\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
    protected $table      = 'tbl_galeri as tg';
    protected $primaryKey = 'id_galeri';

    protected $returnType     = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;

    // set untuk kolom yang dapat di insert atau diupdate 
    protected $allowedFields = ['id_user', 'id_kg', 'judul_galeri', 'ket_galeri', 'file_foto', 'link_video', 'waktu_kegiatan', 'waktu_update', 'jenis_galeri', 'status'];


    public function getData($id = false, $limit = 0, $jenis = '')
    {
        if ($id === false) {
            $where['tg.status'] = 1;
            if ($jenis != '') {
                $where['tg.jenis_galeri'] = $jenis;
            }
            return $this->where($where)
                ->join('tbl_kategori_galeri as tkg', 'tg.id_kg = tkg.id_kg', 'LEFT')
                ->orderBy('tg.waktu_update', 'DESC')
                ->findAll($limit);
        } else {
            return $this->join('tbl_kategori_galeri as tkg', 'tg.id_kg = tkg.id_kg', 'LEFT')->getWhere(['id_galeri' => $id])->getResult();
        }
    }
}
