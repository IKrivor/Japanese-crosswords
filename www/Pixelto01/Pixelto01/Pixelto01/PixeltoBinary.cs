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
            openFileDialog1.Filter = "All Images|*.jpg; *.bmp; *.png; *.gif;" ;
            openFileDialog1.ShowDialog();
            if (openFileDialog1.FileName.ToString() != "")
            { 
                Imagen.ImageLocation = openFileDialog1.FileName.ToString();
                img = new Bitmap(openFileDialog1.FileName.ToString());
            }

            
         }

        private void btnConvert_Click(object sender, EventArgs e)
        {
            int N, M;
            N = (int)numericUpDown1.Value;
            M = (int)numericUpDown2.Value;
            double a = img.Width / N;
            double b = img.Height / M;
            string texto="";


            for (int i = Convert.ToInt32(Math.Round(b/2)); i < img.Height; i+= (int)b)
            {
                for (int j = Convert.ToInt32(Math.Round(a / 2)); j < img.Width; j+= (int)a)
                {
                    if (img.GetPixel(j, i).A.ToString() == "255" && img.GetPixel(j, i).B.ToString() == "0" 
                        && img.GetPixel(j, i).G.ToString() == "0" && img.GetPixel(j, i).R.ToString() == "0")
                    {
                        texto = texto + "1,";

                    }
                    else
                    {
                        texto = texto + "0,";


                    }
                    
                }
                texto = texto + "\r\n";
            }

            txtArreglo.Text = texto;
            
        }

        private void button1_Click(object sender, EventArgs e)
        {
        }
    }

}