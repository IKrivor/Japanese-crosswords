/* Code Made By Orlando Gutiérrez Martínez. 02/09/2007. */

using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

namespace Pixelto01
{
    public partial class PixeltoBinary : Form
    {
        Bitmap img;

        public PixeltoBinary()
        {


            InitializeComponent();
        }

        private void btnImagen_Click(object sender, EventArgs e)
        {
            openFileDialog1.FileName = "";
            openFileDialog1.Title = "Images";
            openFileDialog1.Filter = "All Images|*.jpg; *.bmp; *.png";//
            openFileDialog1.ShowDialog();
            if (openFileDialog1.FileName.ToString() != "")
            { 
                Imagen.ImageLocation = openFileDialog1.FileName.ToString();
                img = new Bitmap(openFileDialog1.FileName.ToString());
            }

            
         }

        private void btnConvert_Click(object sender, EventArgs e)
        {
            string texto="";


            for (int i = 0; i < img.Width; i++)
            {
                for (int j = 0; j < img.Height; j++)
                {
                    if (img.GetPixel(j, i).A.ToString() == "255" && img.GetPixel(j, i).B.ToString() == "255" && img.GetPixel(j, i).G.ToString() == "255" && img.GetPixel(j, i).R.ToString() == "255")
                    {
                        texto = texto + "0";

                    }
                    else
                    {
                        texto = texto + "1";


                    }
                    
                }
                texto = texto + "\r\n";
            }

            txtArreglo.Text = texto;
            
        }

    }

}